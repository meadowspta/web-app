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
        $http.get(url, $scope.form).
            success(function(response, status) {
                console.log(response);
                if (response.success) {
                    $('#addToList').modal('hide');
                } else {
                    $scope.listAddForm = response.form;
                }
                $scope.loaderShow = false;
            }).
            error(function(data, status) {
                console.log('error');
            });
    }
}