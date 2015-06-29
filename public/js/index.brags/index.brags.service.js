/**
 * Created by Claude on 6/28/2015.
 */
(function(){
    'use strict'

angular.module('index.brags.service', []).
    factory('getBrags', ['$http', function($http) {



        return {
                    showBrags : function () {
                        return $http.get('/RUJL/public/api').
                            then(function (response) {
                                return response.data;
                            }, function (error) {
                                return error.status + ' : ' + error.data;
                            });
                    }
                }
    }]);
})();