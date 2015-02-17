function HompageController($scope, $http) {
  $scope.newsArticleClick = function(id) {
    console.log(id);
    $http.get('/news/get/' + id, $scope.form).
      success(function(response, status) {
        if (response) {
          $scope.post = response;
        } else {

        }
        $scope.loaderShow = false;
      }).
      error(function(data, status) {
        console.log('error');
      });
  }
}

function VolunteerSignupController($scope, $http) {
  $scope.init = function() {
    $scope.showVolunteerSignupFormLoader = false;
  }

  $scope.formSubmit = function() {
    $scope.showVolunteerSignupFormLoader = true;

    $http.get('').
      success(function(data, status, headers, config) {

      }).
      error(function(data, status, headers, config) {

      });
  }

  $scope.init();
}

function CrabfeedDashboardController($scope, $http) {
  $scope.init = function() {
    $scope.getTickets(function(response) {
      $scope.tickets = response.response;
    });
  }

  $scope.getTickets = function(callback) {
    $http.get('/api/crabfeed/tickets').
      success(function(data, status, headers, config) {
        callback(data);
      }).
      error(function(data, status, headers, config) {

      });
  }

  $scope.init();
}

function CrabfeedTicketSearchController($scope, $http) {
  $scope.init = function() {

  }

  $scope.qChange = function() {
    $scope.search(function(response) {
      $scope.transactions = response.response;
    });
  }

  $scope.search = function(callback) {
    $http.get('/api/crabfeed/search?q=' + $scope.q).
      success(function(data, status, headers, config) {
        $scope.transactions = data.response;
      }).
      error(function(data, status, headers, config) {

      });
  }

  $scope.init();
}

function CrabfeedTransactionListController($scope, $http) {
  $scope.init = function() {
    $scope.utils = new Utils();
    $scope.getTransactions();
    $scope.filters = {};

    $scope.paymentSources = [
      { name: 'PayPal Here', id: 'paypal_here' },
      { name: 'PayPal Online', id: 'paypal_online' },
      { name: 'Form', id: 'form' },
    ];

    $scope.paymentTypes = [
      { name: 'Check', id: 'check' },
      { name: 'Cash', id: 'cash' },
      { name: 'Credit', id: 'credit' },
    ];

    $scope.items = [
      { name: 'Dinner Tickets', id: 'dinner_ticket' },
      { name: 'Raffle Ticket 5 Pack', id: 'raffle_ticket_5_pack' },
      { name: 'Raffle Tickets', id: 'raffle_ticket' },
      { name: 'Turkey Trott T-Shirt', id: 'turkey_trott_tshirt' },
      { name: 'Donations', id: 'donation' },
    ];

    $scope.sellers = [
      { id: 'kfbetts10', name: 'Keisa Betts' },
      { id: 'opalenik', name: 'Gina Opalenik' },
      { id: 'INAHMARCELO', name: 'Inah Marcelo' },
      { id: 'lisamoca', name: 'Lisa Oca' },
      { id: 'calebwhang', name: 'Caleb Whang' },
    ];

    $scope.crabfeedTicketQuantities = [
      { id: 1, name: '1 ticket' },
      { id: 2, name: '2 tickets' },
      { id: 3, name: '3 tickets' },
      { id: 4, name: '4 tickets' },
      { id: 5, name: '5 tickets' },
      { id: 6, name: '6 or more Tickets' },
    ];

    $scope.infoNeeded = [
      { id: 1, name: 'Information Needed' },
    ]
  }

  $scope.getTransactions = function() {
    $scope.generateQueryString();

    $http.get('/api/crabfeed/transactions/?' + $scope.query).
      success(function(data, status, headers, config) {
        $scope.transactions = data.response;
        $scope.resultCount = $scope.transactions.length;
      }).
      error(function(data, status, headers, config) {

      });
  }

  $scope.filter = function(type, source) {
    if ($scope.isFilterActive(type, source)) {
      $scope.removeFilter(type, source);
    } else {
      $scope.addFilter(type, source);
    }

    $scope.getTransactions();
  }

  $scope.addFilter = function(type, source) {
    $scope.filters[type] = source.id;
  }

  $scope.removeFilter = function(type, source) {
    delete $scope.filters[type];
  }

  $scope.generateQueryString = function() {
    var params = [];

    _.each($scope.filters, function(filter, source) {
      params.push(source + '=' + filter);
    });

    $scope.query = params.join('&');
  }

  $scope.radioButtonState = function(type, source) {
    return $scope.isFilterActive(type, source);
  }

  $scope.isFilterActive = function(type, source) {
    return $scope.filters[type] == source.id;
  }

  $scope.init();
}