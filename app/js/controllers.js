'use strict';

/* Controllers */
var myApp = angular.module('myApp',['ngRoute']);

//
// CONTROLLER
//
myApp.controller('MainCtrl', function($scope,$http,$filter){
    $scope.nazwa = 'Moduł Główny';

    $scope.choice = 'tabela'; //DB table
    $scope.index = 0; //from index
    $scope.viewingSize = 22; //records
    $scope.sortChoice = ''; //or 'reverse'
    $scope.items = {};

    $scope.klikaj = function(){
        //console.log("no kliknalem!");
        $http.post('phpcode/dataset1.php')
        .success(function(data, status, headers, config) {
            //ok
            $scope.items = data;
            console.log('success');
        })
        .error(function(data, status, headers, config) {
            // error status
            //$scope.something = data;
            $scope.something = data + status + headers;
            console.log('error');
        });
    };


    $scope.klikaj2 = function(){
        //console.log("no kliknalem!");
        $http.post('phpcode/dataset2.php')
            .success(function(data, status, headers, config) {
                //ok
                $scope.items = data;
                console.log('success');
            })
            .error(function(data, status, headers, config) {
                // error status
                //$scope.something = data;
                $scope.something = data + status + headers;
                console.log('error');
            });
    };




    $scope.updateTable = function() {
        $http({
            url: 'phpcode/dataset1.php',
            method: 'GET',
            params: {table: $scope.choice, index: $scope.index, viewingSize: $scope.viewingSize, sort: $scope.sortChoice},
        }).success(function(data) {
            $scope.rows = data.rows;
            $scope.columns = data.columns;
        });
    }
});



//
// ROUTE
//
myApp.config(function($routeProvider){
    $routeProvider.when('/',{
        controller:'MainCtrl',
        templateUrl:'View1.html'
    })
    .when('/view2',{
        controller:'V2Ctrl',
        templateUrl:'View2.html'
    })
    .otherwise({redirectTo:'/'});
});

