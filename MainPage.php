<!DOCTYPE html>
<html ng-app="stocKeeper">
<head>
	<title>Stock Keeper</title>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="MainPage.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Angular JS Library-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<!-- Custom JS -->
	<script src="ScrollableTable.js"></script>
	<script src="MainPage.js"></script>
	

</head>
<body ng-controller="stocKeeperCtrl">  
    <!-- Database connection -->


    <!-- Main page layout -->

    <div class="well text-center pageHeader">
                Kavach Fashions
    </div>
	
	<div class="outerAdminTable">
			<button class="btn btn-primary addNewButton" onclick=newEntry()>Add New</button>  
			<div class="searchOptions">
				<div class="row">
					
					<div class="col-sm-1 col-xs-1 styleCode">Style Code:</div>
					<div class="col-sm-2 col-xs-2"><input type="text" class="form-control styleCodeText" placeholder="Enter Style Code" ng-model="dataFilter.StyleCode"></div>
					
					<div class="col-sm-1 col-xs-1 mill">Mill:</div>
					<div class="col-sm-2 col-xs-2"><input type="text" class="form-control millText" placeholder="Enter Mill Name" ng-model="dataFilter.Mill"></div>
					
					<div class="col-sm-1 col-xs-1 fabric">Fabric:</div>
					<div class="col-sm-2 col-xs-2"><input type="text" class="form-control fabricText" placeholder="Enter Fabric Name" ng-model="dataFilter.Fabric"></div>
					
					<div class="col-sm-1 col-xs-1 fabric">Brand:</div>
					<div class="col-sm-2 col-xs-2"><input type="text" class="form-control fabricText" placeholder="Enter Fabric Name" ng-model="dataFilter.Brand"></div>
					
				</div>
			</div>  
			<table class="table table-fixed adminTable">
				<thead>
					<tr>
						<th  class="col-xs-1 text-center tableHeading">Image</th>
						<th  class="col-xs-3 text-center tableHeading">Style Code</th>
						<th  class="col-xs-3 text-center tableHeading">Mill</th>
						<th  class="col-xs-2 text-center tableHeading">Fabric</th>
						<th  class="col-xs-2 text-center tableHeading">Brand</th>
						<th  class="col-xs-1 text-center tableHeading">Edit</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<tr ng-repeat="data in dataEntries | filter: dataFilter">
						<td  class="col-xs-1 "><img ng-src="{{data.Image}}" class="materialImg"></td>
						<td  class="col-xs-3 paddingTop">{{data.StyleCode}}</td>
						<td  class="col-xs-3 paddingTop">{{data.Mill}}</td>
						<td  class="col-xs-2 paddingTop">{{data.Fabric}}</td>
						<td  class="col-xs-2 paddingTop">{{data.Brand}}</td>
						<td  class="col-xs-1 paddingTop"><a href="EditPage.php?styleCode={{data.StyleCode}}&fabric={{data.Fabric}}&mill={{data.Mill}}&brand={{data.Brand}}&id={{data.id}}">
						<span class="glyphicon glyphicon-pencil editPencil"></span></a> </td>		
					</tr>
			   
				</tbody>
			</table>
	</div>


   <script type="text/javascript">
    function newEntry()
    {
        window.location = "NewEntry.php";
    }
</script>                                                                                                                   
</body>
</html>


