
var countryApp = angular.module('stocKeeper', []);
      countryApp.controller('stocKeeperCtrl', function ($scope, $http){
		 $http.get('dataEntries.php').then(function(response) {
          $scope.dataEntries = response.data;
		  console.log(response.data);
        },function(data){		
			alert(data);
		});
       
});