/**
 * Created by Claude on 6/28/2015.
 */

(function(){
    'use strict'

angular.module('RUJL.brags.controller', ['index.brags.service']).
    controller('showBrags',['getBrags','$scope','$location',
        function(getBrags, $scope, $location){
            $scope.host = $location.host();
            var brags = getBrags.showBrags().
                then(function(response){
                    $scope.brags = response;
                    console.log( $scope.brags);
                });



    }]);

})();