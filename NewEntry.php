<!DOCTYPE html>
<html>
<head>
	<title>Stock Keeper</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Angular JS Library-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="NewEntry.css">
	
	<script src="newEntry.js"></script>
<style>

.uploadMaterial{
	padding-bottom:25px;
}

.uploadMaterialLabel{
	float:left;
}
.uploadMaterialBtn{
	float:left;
}

.uploadMaterialImg{
	width:50px;
	height:50px;
	display:inline-block;
}
</style>

</head>
<body ng-app="newEntry" ng-controller="newEntryCtrl">  
    <!-- Database connection -->
    <?php include 'connect.php'; ?>

    <!-- Main page layout -->

    <div class="well text-center pageHeader">
                Kavach Fashions
    </div>
<form action="NewEntryDatabaseInsert.php" method="POST" enctype="multipart/form-data">
    
	<div class="uploadMaterial">
			<label class="uploadMaterialLabel">Upload Material : </label><input onchange="angular.element(this).scope().uploadedFile(this)" type="file" name="materialImage" id="materialImage" class="uploadMaterialBtn">
			<img ng-src="{{image_source}}" class="uploadMaterialImg">
	</div>
	
	<table class="table table-striped infoTable">
        <tr>
            <td>Style Code:</td>
            <td><input type="text" class="styleCode form-control" id="styleCode" name="styleCode"></td>
            <td>Mill:</td>
            <td><input type="text" class="styleCode form-control" id="mill" name="mill"></td>
            <td>Fabric:</td>
            <td><input type="text" class="styleCode form-control" id="fabric" name="fabric"></td>
			<td>Brand:</td>
            <td><input type="text" class="styleCode form-control" id="brand" name="brand"></td>
        </tr>

        <!--Store In Details -->
        <tr>
            <td>Store In Date:</td>
            <td><input type="date" class="storeInDate form-control" id="storeInDate" name="storeInDate"></td>
            <td>Store In Meters</td>
            <td><input type="text" class="storeInMeters form-control" id="storeInMeters" name="storeInMeters"></td>
            <!--<td>Store In Pieces:</td>
            <td><input type="text" class="storeInPieces form-control" id="storeInPieces" name="storeInPieces"></td>-->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

         <!--Store Out Details -->
        <tr>
            <td>Store Out Date:</td>
            <td><input type="date" class="storeOutDate form-control" id="storeOutDate" name="storeOutDate"></td>
            <td>Store Out Meters</td>
            <td><input type="text" class="storeOutMeters form-control" id="storeOutMeters" name="storeOutMeters"></td>
            <!--<td>Store Out Pieces:</td>
            <td><input type="text" class="storeOutPieces form-control" id="storeOutPieces" name="storeOutPieces"></td>-->
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

         <!--Cutting Out Details -->
        <tr>
            <td>Cutting Out Date:</td>
            <td><input type="date" class="cuttingOutDate form-control" id="cuttingOutDate" name="cuttingOutDate"></td>
            <td>Cutting Out Meters</td>
            <td><input type="text" class="cuttingOutMeters form-control" id="cuttingOutMeters" name="cuttingOutMeters"></td>
            <td></td>
            <td></td>
            <!--<td>Cutting Out Pieces:</td>
            <td><input type="text" class="cuttingOutPieces form-control" id="cuttingOutPieces" name="cuttingOutPieces"></td>-->
            <td></td>
            <td></td>
        </tr>

         <!--Production Out Details -->
        <tr>
            <td>Production Out Date:</td>
            <td><input type="date" class="productionOutDate form-control" id="productionOutDate" name="productionOutDate"></td>
            <td>Production Out Meters</td>
            <td><input type="text" class="productionOutMeters form-control" id="productionOutMeters" name="productionOutMeters"></td>
            <td>Production Out Pieces:</td>
            <td><input type="text" class="productionOutPieces form-control" id="productionOutPieces" name="productionOutPieces"></td>
            <td></td>
            <td></td>
        </tr>

         <!--Quality Out Details -->
        <!--<tr>
            <td>Quality Out Date:</td>
            <td><input type="date" class="qualityOutDate form-control" id="qualityOutDate" name="qualityOutDate"></td>
            <td>Quality Out Meters</td>
            <td><input type="text" class="qualityOutMeters form-control" id="qualityOutMeters" name="qualityOutMeters"></td>
            <td>Quality Out Pieces:</td>
            <td><input type="text" class="qualityOutPieces form-control" id="qualityOutPieces" name="qualityOutPieces"></td>
        </tr>
        -->

        <!--Excess out Pieces -->
        <tr>
            <td>Excess Pieces:</td>
            <td><input type="text" class="excessPieces form-control" id="excessPieces" name="excessPieces"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        <!--Client Out Details -->
        <tr>
            <td>Client Out Date:</td>
            <td><input type="date" class="clientOutDate form-control" id="clientOutDate" name="clientOutDate"></td>
            <td>Client Out Meters</td>
            <td><input type="text" class="clientOutMeters form-control" id="clientOutMeters" name="clientOutMeters"></td>
            <td>Client Out Pieces:</td>
            <td><input type="text" class="clientOutPieces form-control" id="clientOutPieces" name="clientOutPieces"></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!--Complete Button-->
    <a href="MainPage.php">Go to Main Page</a>
    <button class="btn btn-primary  completeButton" onclick=submitDetails()>Complete</button>
</form>

    
</body>
</html>