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