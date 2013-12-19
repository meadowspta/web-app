var MeadowsPTA = {};

$(function() {

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
var meadowsPtaApp = angular.module('meadowspta', [], function($compileProvider) {
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

meadowsPtaApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
})
.directive('eatClick', function() {
    return function(scope, element, attrs) {
        jQuery(element).click(function(event) {
            event.preventDefault();
        });
    }
});

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