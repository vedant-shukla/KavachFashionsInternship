<?php
 include 'connect.php';
 $styleCode = $_REQUEST['styleCode'];
 $fabric =  $_REQUEST['fabric'];
 $mill =  $_REQUEST['mill'];
 $brand = $_REQUEST['brand'];
 $id = $_REQUEST['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Stock Keeper</title>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="EditPage.css">
<script src="EditPage.js"></script>

<style>

.uploadMaterialLabel{
	float:left;
	margin-top:15px;
	margin-left:10px;
}
.uploadMaterialBtn{
	float:left;
	margin-top:15px;
	margin-left:10px;
}

.uploadMaterialImg{
	width:70px;
	height:70px;
	margin-top:10px;
	display:inline-block;
}

.infoTable{
	margin-top:10px;
}
</style>
</head>
<body ng-app="editPage" ng-controller="editPageCtrl">  
    <!-- Database connection -->
    <?php include 'connect.php'; ?>

    <!-- Main page layout -->
	
    <div class="well text-center pageHeader">
                Kavach Fashions
    </div>
	
	<form method="post" action="EditPageDatabaseUpdate.php?styleCode=<?php echo $styleCode;?>&fabric=<?php echo $fabric;?>&mill=<?php echo $mill;?>&brand=<?php echo $brand;?>&id=<?php echo $id;?>" enctype="multipart/form-data">
        <div class="row info">
            

            <div class="col-sm-3 col-xs-3 styleCode">Style Code: &nbsp&nbsp  <?php echo $_REQUEST['styleCode']; ?> </div>
            <div class="col-sm-3 col-xs-3 mill">Mill: &nbsp&nbsp <?php echo $_REQUEST['mill']; ?></div>
            <div class="col-sm-3 col-xs-3 fabric">Fabric: &nbsp&nbsp <?php echo $_REQUEST['fabric']; ?></div>
			<div class="col-sm-3 col-xs-3 fabric">Brand: &nbsp&nbsp <?php echo $_REQUEST['brand']; ?></div>
			
        </div>

     
		<table class="table table-striped infoTable">
		 <?php
			
			
			$sql = "SELECT * FROM stockdata WHERE id = '".$id ."' ";
			$result = mysqli_query($conn,$sql);
			
			
			
			if(mysqli_num_rows($result)> 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					
			?>   
			
			<label class="uploadMaterialLabel">Replace Material  Image: </label><input onchange="angular.element(this).scope().uploadedFile(this)" type="file" name="materialImage" id="materialImage" class="uploadMaterialBtn">
			<img src="<?php echo $row['Image']; ?>" class="uploadMaterialImg" ng-hide="a">
			<img ng-src="{{image_source}}" class="uploadMaterialImg" ng-show="a">
			 
			 
			 
			 <tr class="text-center">  
				 <td>Store In Date:</td>
				 <td> <input type="date" class = "form-control" id = "storeInDate" value = "<?php echo $row['StoreInDate']; ?>" name="storeInDate"> </td>
				 <td>Store In Meters:</td>
				 <td> <input type="text" class = "form-control" id="storeInMeters" value = "<?php echo $row['StoreInMeter']; ?>" name="storeInMeters"> </td>
				 <!--<td>Store In Pieces:</td>
				 <td> <input type="text" class = "form-control" id="storeInPieces" value = "<?php echo $row['StoreInPieces']; ?>" name="storeInPieces"> </td>-->
				 <td></td>
				 <td></td>
				 
			 </tr>

			 <tr class="text-center">  
				 <td>Store Out Date:</td>
				 <?php
				  
				 ?>
				 <td> <input type="date" class = "form-control storeOutDate" name = "storeOutDate" 
							  value = "<?php  
									if(strcmp($row['StoreOutDate'],'0000-00-00')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['StoreOutDate'];
									}
							  ?>">
				 </td>


				 <td>Store Out Meters:</td>
				 <td> <input type="text" class = "form-control storeOutMeters" name = "storeOutMeters" 
							  value = "<?php  
									if(strcmp($row['StoreOutMeter'],'0') == 0)
									{
											echo "";
									}
									else
									{
										echo $row['StoreOutMeter'];
									}
							  ?>"> 
				 </td>
				 <!--<td>Store Out Pieces:</td>
				 <td> 
					 <input type="text" class = "form-control storeOutPieces" name="storeOutPieces" 
							  value = "<?php  
									if(strcmp($row['StoreOutPieces'],'0')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['StoreOutPieces'];
									}
							  ?>">
				 </td>-->
				 <td></td>
				 <td></td>
			 </tr>

			 <!--Cutting Out -->
			 <tr class="text-center">  
				 <td>Cutting Out Date:</td>
				 <?php
				  
				 ?>
				 <td> <input type="date" class = "form-control cuttingOutDate" name="cuttingOutDate" 
							  value = "<?php  
									if(strcmp($row['CuttingOutDate'],'0000-00-00')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['CuttingOutDate'];
									}
							  ?>">
				 </td>


				 <td>Cutting Out Meters:</td>
				 <td> <input type="text" class = "form-control cuttingOutMeters" name= "cuttingOutMeters" 
							  value = "<?php  
									if(strcmp($row['CuttingOutMeters'],'0') == 0)
									{
											echo "";
									}
									else
									{
										echo $row['CuttingOutMeters'];
									}
							  ?>"> 
				 </td>
				 <!--<td>Cutting Out Pieces:</td>
				 <td> 
					 <input type="text" class = "form-control cuttingOutPieces" name = "cuttingOutPieces" 
							  value = "<?php  
									if(strcmp($row['CuttingOutPieces'],'0')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['CuttingOutPieces'];
									}
							  ?>">
				 </td>-->
				 <td></td>
				 <td></td>
			 </tr>

			 <!--Production Out -->
			 <tr class="text-center">  
				 <td>Production Out Date:</td>
				 <?php
				  
				 ?>
				 <td> <input type="date" class = "form-control productionOutDate" name="productionOutDate" 
							  value = "<?php  
									if(strcmp($row['ProductionOutDate'],'0000-00-00')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['ProductionOutDate'];
									}
							  ?>">
				 </td>


				 <td>Production Out Meters:</td>
				 <td> <input type="text" class = "form-control productionOutMeters" name= "productionOutMeters" 
							  value = "<?php  
									if(strcmp($row['ProductionOutMeters'],'0') == 0)
									{
											echo "";
									}
									else
									{
										echo $row['ProductionOutMeters'];
									}
							  ?>"> 
				 </td>
				 <td>Production Out Pieces:</td>
				 <td> 
					 <input type="text" class = "form-control productionOutPieces" name = "productionOutPieces" 
							  value = "<?php  
									if(strcmp($row['ProductionOutPieces'],'0')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['ProductionOutPieces'];
									}
							  ?>">
				 </td>
			 </tr>

			 <!--Quality Out -->
			 <!--<tr class="text-center">  
				 <td>Quality Out Date:</td>
				 <?php
				  
				 ?>
				 <td> <input type="date" class = "form-control qualityOutDate" name="qualityOutDate" 
							  value = "<?php  
									if(strcmp($row['QualityOutDate'],'0000-00-00')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['QualityOutDate'];
									}
							  ?>">
				 </td>


				 <td>Quality Out Meters:</td>
				 <td> <input type="text" class = "form-control qualityOutMeters" name= "qualityOutMeters" 
							  value = "<?php  
									if(strcmp($row['QualityOutMeters'],'0') == 0)
									{
											echo "";
									}
									else
									{
										echo $row['QualityOutMeters'];
									}
							  ?>"> 
				 </td>
				 <td>Quality Out Pieces:</td>
				 <td> 
					 <input type="text" class = "form-control qualityOutPieces" name = "qualityOutPieces" 
							  value = "<?php  
									if(strcmp($row['QualityOutPieces'],'0')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['QualityOutPieces'];
									}
							  ?>">
				 </td>
			 </tr>-->


			 <!--Excess pieces -->
			 <tr class="text-center">  
				 <td>Excess Pieces:</td>
				 <td> <input type="text" class = "form-control excessPieces" name= "excessPieces" 
							  value = "<?php  
									if(strcmp($row['ExcessPieces'],'0') == 0)
									{
											echo "";
									}
									else
									{
										echo $row['ExcessPieces'];
									}
							  ?>"> 
				 </td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>

				</tr>




			 <!--Client Out -->
			 <tr class="text-center">  
				 <td>Client Delivered Date:</td>
				 <?php
				  
				 ?>
				 <td> <input type="date" class = "form-control clientDeliveredDate" name="clientDeliveredDate" 
							  value = "<?php  
									if(strcmp($row['ClientDeliveredDate'],'0000-00-00')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['ClientDeliveredDate'];
									}
							  ?>">
				 </td>


				 <td>Client Out Meters:</td>
				 <td> <input type="text" class = "form-control clientDeliveredMeters" name= "clientDeliveredMeters" 
							  value = "<?php  
									if(strcmp($row['ClientDeliveredMeters'],'0') == 0)
									{
											echo "";
									}
									else
									{
										echo $row['ClientDeliveredMeters'];
									}
							  ?>"> 
				 </td>
				 <td>Client Out Pieces:</td>
				 <td> 
					 <input type="text" class = "form-control clientDeliveredPieces" name = "clientDeliveredPieces" 
							  value = "<?php  
									if(strcmp($row['ClientDeliveredPieces'],'0')== 0)
									{
											echo "";
									}
									else
									{
										echo $row['ClientDeliveredPieces'];
									}
							  ?>">
				 </td>
			 </tr>


			 <?php       
				}
			
			}
			 ?>
		</table>
		 
		 <!-- Complete Upate Button-->
		<div class="text-center">
			<input type="submit" name="update" value="Complete" class="btn btn-lg btn-success">
		</div>
		<a href="MainPage.php">Go to Main Page</a>
	</form>
		
</body>
</html>