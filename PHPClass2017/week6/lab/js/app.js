(function () {

    'use strict';
    angular
            .module('app', ['ngRoute'])
            .config(config);
    config.$inject = ['$routeProvider'];
    function config($routeProvider) {
        $routeProvider.
                when('/', {
                    templateUrl: 'js/phone-list.template.html',
                    conteoller: 'PhoneListController',
                    controllerAs: 'vm'
                }).
                when('/phones/:phoneId', {
                    templateUrl: 'js/phone-detail.template.html',
                    conteoller: 'PhoneDetailController',
                    controllerAs: 'vm'
                }).
                otherwise({
                    redirectTo: '/'
                });
    }
})();