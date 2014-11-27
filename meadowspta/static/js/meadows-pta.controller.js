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