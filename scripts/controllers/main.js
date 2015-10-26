'use strict';

/**
 * @ngdoc function
 * @name richlineCreative2014App.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the richlineCreative2014App
 */

angular.module('richlineCreative2014App')
  .controller('MainCtrl', ['$scope', '$http', function ($scope, $http) {
      $scope.season = '';
      $scope.year = '';
      $scope.trendCategory = '';
      $scope.currentTrends = [];

      $scope.filterTrends = function (trendName) {

        if(trendName === "") {
          $scope.currentTrends = $scope.trends;

          return;
        } else {

          $scope.currentTrends = [];

           for(var i = 0; i < $scope.trends.length; i++) {
             if($scope.trends[i].category === trendName) {
               $scope.currentTrends.push($scope.trends[i]);
            }
          }
        }
      }

      $http.get('data/trendList.js').success(function(data){
        $scope.trends = data;
        $scope.currentTrends = data; // current trends is the current category
      });

    }]);
