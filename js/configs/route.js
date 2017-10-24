app.config(['$stateProvider','$urlRouterProvider',function ($stateProvider,$urlRouterProvider) {
    $urlRouterProvider.otherwise('register');
    $stateProvider
        .state('register',{
            url : '/register',
            templateUrl : '',
            controller: ''
        })
        .state()
}]);
