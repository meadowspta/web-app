var MeadowsPTA = {};

$(document).ready(function(){
  $("[data-toggle='tooltip']").tooltip({ trigger: 'hover' });
  $("[data-toggle='popover']").popover({ trigger: 'hover' });
});

/*
Meadows.statusMessageManager = function() {
  if (_displayStatusMessage) {
    $('#status-message').slideDown(750);

    setTimeout(function() {
      $('#status-message').slideUp(1500);
    }, 5000);
  }
};
*/


/* AngularJS */
var meadowsPtaApp = angular.module('meadowspta', ['ngRoute', 'ngSanitize', 'ngCookies', 'meadowsPtaApp.filters'], function($compileProvider) {
  $compileProvider.directive('compile', function($compile) {
    return function(scope, element, attrs) {
      scope.$watch(
      function(scope) {
        return scope.$eval(attrs.compile);
      },
      function(value) {
        element.html(value);
        $compile(element.contents())(scope);
      }
      );
    };
  });
});

/* Config */
meadowsPtaApp.config(function($locationProvider) {
  $locationProvider.html5Mode(true).hashPrefix('!');
}).
config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('{[');
  $interpolateProvider.endSymbol(']}');
}).
config(function($httpProvider) {
  $httpProvider.defaults.transformRequest = function(data) {
    if (data === undefined) {
      return data;
    }
    return $.param(data);
  }

  $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
});

/* Routes */
meadowsPtaApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/wishlist/search', {
        templateUrl: '/partials/?view=wishlist/search/results',
        controller: 'ProductSearchController'
      }).
      when('/wishlist/product/:productId', {
        templateUrl: '/partials/?view=wishlist/product/view',
        controller: 'ProductDetailsController'
      }).
      otherwise({
        redirectTo: '/'
      });
  }]);

/* Run */
meadowsPtaApp.run(function run($http, $cookies) {
  // For CSRF token compatibility with Django
  $http.defaults.headers.post['X-CSRFToken'] = $cookies['csrftoken'];
});

/* Filters */
angular.module('meadowsPtaApp.filters', []).
  filter('stripTags', function() {
    return function(text) {
      return String(text).replace(/<[^>]+>/gm, '');
    }
  }).
  filter('prune', function() {
    return function(text, length, pruneString) {
      length = length ? length : 100;
      return _(text).prune(length, pruneString);
    }
  });

/* Directives */
meadowsPtaApp.directive('eatClick', function() {
  return function(scope, element, attrs) {
    jQuery(element).click(function(event) {
      event.preventDefault();
    });
  }
});

function ProductSearchController($scope, $http, $location) {
  $scope.init = function() {
    $scope.q = $location.search().q ? $location.search().q : '';
    $scope.showSearchLoader = false;
    $scope.search();
  }

  /* Click handlers */
  $scope.searchSubmit = function() {
    $scope.generateURL();
  }

  /* Main methods */
  $scope.generateURL = function() {
    $location.search({ q: $scope.q });
  }

  $scope.search = function() {
    if ($scope.q.length > 2) {
      $scope.showSearchLoader = true;

      $http.get('/api/search/products/' + $scope.q).
        success(function(response, status) {
          $scope.products = response.response;
          $scope.showSearchLoader = false;
        }).
        error();
    }
  }

  $scope.init();
}

function ProductDetailsController($scope, $http, $location) {
  $scope.init = function() {
    $scope.product = {};
    $scope.loadProduct();
  }

  /**
   * Load the product details.
   */
  $scope.loadProduct = function() {
    $scope.productId = _.last($location.path().split('/'));

    if ($scope.productId) {
      $http.get('/api/products/' + $scope.productId).
        success(function(response, status) {
          $scope.product = response.response;
        }).
        error();
    }
  }

  $scope.init();
}

function SimilarProductsController($scope, $http, $location) {
  $scope.init = function() {
    $scope.product = {};
    $scope.loadSimilarProducts();
  }

  /**
   * Load the product details.
   */
  $scope.loadSimilarProducts = function() {
    var path = $location.path().split('/');
    $scope.productId = path[path.length - 1];

    if ($scope.productId) {
      $http.get('/api/products/' + $scope.productId + '/similar/').
        success(function(response, status) {
          $scope.products = response.response;
        }).
        error();
    }
  }

  $scope.init();
}

function AddToListController($scope, $http, $location) {
  $scope.init = function() {
    $scope.showListSelectList = true;
    $scope.showListDropDown = false;
    $scope.lists = [];

    // Initialize forms.
    $scope.addItemToListForm = {};
    $scope.createListForm = {};

    // Load user's lists.
    $scope.getUserLists(function(lists) {
      $scope.lists = lists;
    });
  }

  /**
   * Click handler when the select list has been clicked.
   */
  $scope.clickListSelector = function() {
    $scope.showListDropDown = true;
    $scope.showListSelectList = false;
  }

  /**
   * Click handler for the list create button.
   */
  $scope.clickCreateList = function() {
    $scope.saveList(function(list) {
      $scope.getUserLists(function(lists) {
        $scope.lists = lists;
        $scope.showListSelectList = true;
        $scope.showListDropDown = false;
        $scope.createListForm.title = '';

        // Set the selected list from the updated list of lists.
        $scope.lists.forEach(function(listItem) {
          if (list.id == listItem.id) {
            $scope.addItemToListForm.selectedList = listItem;
          }
        });
      });
    });
  }

  /**
   * Click handler for when a list is selected.
   */
  $scope.clickListSelection = function(list) {
    $scope.showListSelectList = true;
    $scope.showListDropDown = false;
    $scope.addItemToListForm.selectedList = list;
  }

  /**
   * Click handler for when the "Add" button is clicked.
   */
  $scope.clickAddItemToList = function() {
    $scope.saveItemToList(function() {
      // Clear form.
      $scope.addItemToListForm.selectedList = null;
      $scope.addItemToListForm.description = '';
    });
  }

  /**
   * Save the item to the list.
   */
  $scope.saveItemToList = function(callback) {
    var form = $scope.addItemToListForm;
    var data = {
      asin: $scope.productId,
      list_id: form.selectedList.id,
      description: form.description,
    };

    console.log(data);

    $http.post('/api/lists/add/item/', data).
      success(function(data, status, headers, config) {
        if (callback) {
          var list = data.response;
          callback(list);
        }
      }).
      error(function(data, status, headers, config) {

      });
  }

  /**
   * Get the user's lists.
   */
  $scope.getUserLists = function(callback) {
    $http.get('/api/lists/?user_id=' + 1).
      success(function(data, status, headers, config) {
        var lists = data.response;
        if (callback) {
          callback(lists)
        }
      }).
      error(function(data, status, headers, config) {

      });
  }

  /**
   * Save the new list via the API.
   */
  $scope.saveList = function(callback) {
    $http.post('/api/lists/add/', $scope.createListForm).
      success(function(data, status, headers, config) {
        if (callback) {
          var list = data.response;
          callback(list);
        }
      }).
      error(function(data, status, headers, config) {

      });
  }

  $scope.init();
}