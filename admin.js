
var app = angular.module('stocKeeperAdmin', ['ngRoute']);
      app.controller('stocKeeperAdminCtrl', function ($scope, $http){
		 $http.get('dataEntries.php').then(function(response) {
          $scope.dataEntries = response.data;
		  console.log(response.data);
        },function(data){		
			alert(data);
		});
       
});

app.config(function($routeProvider,$locationProvider) {
   $locationProvider.hashPrefix('');
   $routeProvider
    .when("/", {
        templateUrl : "adminMain.php"
    })
    .when("/:id", {
        templateUrl : "wasteMeter.php",
		controller : "wasteMeterController"
    })
	.when("/Details/:id", {
        templateUrl : "detailedProgress.php",
		controller : "detailedProgressController"
    })
	.when("/WasteDetails/:cid/collectionId/:id", {
        templateUrl : "wasteMeterDetails.php",
		controller : "wasteMeterDetailsController"
    })
    .otherwise({
        template : "<h1>None</h1><p>Nothing has been selected</p>"
    });
});

app.controller('wasteMeterController', function ($scope, $http, $routeParams){
		 	
 		 $scope.id =$routeParams.id;
		 $http({
			method: 'GET',
			url: 'wasteMeterConfig.php',
			params: {id: $scope.id}
		 }).then(function(response){
			$scope.adminDataEntries = response.data;
			
        },function(data){		
			console.log(response.data);
	});

});

app.controller('detailedProgressController', function ($scope, $http, $routeParams){
		 	
 		 $scope.id =$routeParams.id;
		 $http({
			method: 'GET',
			url: 'detailedProgressConfig.php',
			params: {id: $scope.id}
		 }).then(function(response){
			console.log(response.data);
			$scope.detailedProgress = response.data[0];
			if(response.data[0].StoreInDate!="0000-00-00"){
				var e1 = document.getElementById("storeIn");
				e1.classList.add("active");
			}
			if(response.data[0].StoreOutDate!="0000-00-00"){
				var e2 = document.getElementById("storeOut");
				e2.classList.add("active");
			}
			if(response.data[0].CuttingOutDate!="0000-00-00"){
				var e3 = document.getElementById("cuttingOut");
				e3.classList.add("active");
			}
			if(response.data[0].ProductionOutDate!="0000-00-00"){
				var e4 = document.getElementById("productionOut");
				e4.classList.add("active");
			}
			if(response.data[0].ClientDeliveredDate!="0000-00-00"){
				var e5 = document.getElementById("clientDelivered");
				e5.classList.add("active");
			}
        },function(data){		
			console.log(response.data);
	});

});


app.controller('wasteMeterDetailsController', function ($scope, $http, $routeParams){
 		 $scope.id = $routeParams.id;
		 $scope.cid = $routeParams.cid;
		 console.log($scope.id);
		 $http({
			method: 'GET',
			url: 'wasteMeterDetailsConfig.php',
			params: {id: $scope.id, cid:$scope.cid}
		 }).then(function(response){
			$scope.wasteMeterDetails = response.data;			
        },function(data){		
			console.log(response.data);
	});

});