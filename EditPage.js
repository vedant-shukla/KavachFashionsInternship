var countryApp1 = angular.module('editPage', []);
      countryApp1.controller('editPageCtrl', function ($scope, $http){
		 $scope.a=false;
		$scope.uploadedFile = function(element) {
		    $scope.currentFile = element.files[0];
			console.log($scope.currentFile);
		    var reader = new FileReader();

		    reader.onload = function(event) {
			  $scope.a = true;
		      $scope.image_source = event.target.result;
		      $scope.$apply(function($scope) {
		        $scope.files = element.files;
		      });
			  console.log($scope.files);
		    }
             reader.readAsDataURL(element.files[0]);
		  }		  

       
});
   
