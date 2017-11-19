var countryApp1 = angular.module('newEntry', []);
      countryApp1.controller('newEntryCtrl', function ($scope, $http){
		 
		$scope.uploadedFile = function(element) {
		    $scope.currentFile = element.files[0];
			console.log($scope.currentFile);
		    var reader = new FileReader();

		    reader.onload = function(event) {
		      $scope.image_source = event.target.result;
		      $scope.$apply(function($scope) {
		        $scope.files = element.files;
		      });
			  console.log($scope.files);
		    }
             reader.readAsDataURL(element.files[0]);
		  }		  
});
   
