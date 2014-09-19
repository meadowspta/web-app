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