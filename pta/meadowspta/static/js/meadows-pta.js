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
var meadowsPtaApp = angular.module('meadowspta', []);

meadowsPtaApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

function HompageController($scope, $http) {
    $scope.title = 'asdfasdf';

    $scope.newsArticleClick = function(id) {
        console.log(id);
    }
}