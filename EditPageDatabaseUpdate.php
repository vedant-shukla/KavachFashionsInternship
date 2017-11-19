	<!-- Update Button PHP-->
	<?php

			 include 'connect.php';
			 $styleCode = $_REQUEST['styleCode'];
			 $fabric =  $_REQUEST['fabric'];
			 $mill =  $_REQUEST['mill'];
			 $brand = $_REQUEST['brand'];
			//for storeInDate
			if(isset($_POST["storeInDate"]) && strlen($_POST["storeInDate"]) > 0 )
			{
				$storeInDate = $_POST["storeInDate"];
			}
			else
			{
				$storeInDate = "00/00/0000";
			}

			//for storeInMeters
			if( isset($_POST["storeInMeters"]) && strlen($_POST["storeInMeters"]) > 0 )
			{
				$storeInMeters = $_POST["storeInMeters"];
			}
			else
			{
				$storeInMeters = 0;
			}
			
			//for storeInPieces
			if( isset($_POST["storeInPieces"]) && strlen($_POST["storeInPieces"]) > 0 )
			{
				$storeInPieces = $_POST["storeInPieces"];
			}
			else
			{
				$storeInPieces = 0;
			}

			//for storeOutDate
			if( isset($_POST["storeOutDate"]) && strlen($_POST["storeOutDate"]) > 0 )
			{
				$storeOutDate = $_POST["storeOutDate"];
			}
			else
			{
				$storeOutDate = "00/00/0000";
			}

			//for storeOutMeters
			if( isset($_POST["storeOutMeters"]) && strlen($_POST["storeOutMeters"]) > 0 )
			{
				$storeOutMeters = $_POST["storeOutMeters"];
			}
			else
			{
				$storeOutMeters = 0;
			}

			//for storeOutPieces
			if( isset($_POST["storeOutPieces"]) && strlen($_POST["storeOutPieces"]) > 0 )
			{
				$storeOutPieces = $_POST["storeOutPieces"];
			}
			else
			{
				$storeOutPieces = 0;
			}

			//for cuttingOutDate
			if( isset($_POST["cuttingOutDate"]) && strlen($_POST["cuttingOutDate"]) > 0 )
			{
				$cuttingOutDate = $_POST["cuttingOutDate"];
			}
			else
			{
				$cuttingOutDate = "00/00/0000";
			}

			//for cuttingOutMeters
			if( isset($_POST["cuttingOutMeters"]) && strlen($_POST["cuttingOutMeters"]) > 0 )
			{
				$cuttingOutMeters = $_POST["cuttingOutMeters"];
			}
			else
			{
				$cuttingOutMeters = 0;
			}

			//updating waste in meters
			if(isset($_POST["cuttingOutMeters"]) && strlen($_POST["cuttingOutMeters"]) > 0 && isset($_POST["storeOutMeters"]) && strlen($_POST["storeOutMeters"]) > 0 )
			{
				$wasteInMeters = $_POST["storeOutMeters"] - $_POST["cuttingOutMeters"];
			}
			else{
				$wasteInMeters=0;
			}
			//for cuttingOutPieces
			if( isset($_POST["cuttingOutPieces"]) && strlen($_POST["cuttingOutPieces"]) > 0 )
			{
				$cuttingOutPieces = $_POST["cuttingOutPieces"];
			}
			else
			{
				$cuttingOutPieces = 0;
			}

			//for productionOutDate
			if( isset($_POST["productionOutDate"]) && strlen($_POST["productionOutDate"]) > 0 )
			{
				$productionOutDate = $_POST["productionOutDate"];
			}
			else
			{
				$productionOutDate = "00/00/0000";
			}

			//for productionOutMeters
			if( isset($_POST["productionOutMeters"]) && strlen($_POST["productionOutMeters"]) > 0 )
			{
				$productionOutMeters = $_POST["productionOutMeters"];
			}
			else
			{
				$productionOutMeters = 0;
			}
			//for productionOutPieces
			if( isset($_POST["productionOutPieces"]) && strlen($_POST["productionOutPieces"]) > 0 )
			{
				$productionOutPieces = $_POST["productionOutPieces"];
			}
			else
			{
				$productionOutPieces = 0;
			}
			


			//this row is to enter the excess pieces:
			if( isset($_POST["excessPieces"]) && strlen($_POST["excessPieces"]) > 0 )
			{
				$excessPieces = $_POST["excessPieces"];
			}
			else
			{
				$excessPieces = 0;
			}

			// removing the quality out portion:
			//for qualityOutDate
			// if( isset($_POST["qualityOutDate"]) && strlen($_POST["qualityOutDate"]) > 0 )
			// {
			// 	$qualityOutDate = $_POST["qualityOutDate"];
			// }
			// else
			// {
			// 	$qualityOutDate = "00/00/0000";
			// }

			// //for qualityOutMeters
			// if( isset($_POST["qualityOutMeters"]) && strlen($_POST["qualityOutMeters"]) > 0 )
			// {
			// 	$qualityOutMeters = $_POST["qualityOutMeters"];
			// }
			// else
			// {
			// 	$qualityOutMeters = 0;
			// }

			// //for qualityOutPieces
			// if( isset($_POST["qualityOutPieces"]) && strlen($_POST["qualityOutPieces"]) > 0 )
			// {
			// 	$qualityOutPieces = $_POST["qualityOutPieces"];
			// }
			// else
			// {
			// 	$qualityOutPieces = 0;
			// }

			//for clientDeliveredDate
			if( isset($_POST["clientDeliveredDate"]) && strlen($_POST["clientDeliveredDate"]) > 0 )
			{
				$clientDeliveredDate = $_POST["clientDeliveredDate"];
			}
			else
			{
				$clientDeliveredDate = "00/00/0000";
			}

			//for clientDeliveredMeters
			if( isset($_POST["clientDeliveredMeters"]) && strlen($_POST["clientDeliveredMeters"]) > 0 )
			{
				$clientDeliveredMeters = $_POST["clientDeliveredMeters"];
			}
			else
			{
				$clientDeliveredMeters = 0;
			}

			//for clientOutPieces
			if( isset($_POST["clientDeliveredPieces"]) && strlen($_POST["clientDeliveredPieces"]) > 0 )
			{
				$clientDeliveredPieces = $_POST["clientDeliveredPieces"];
			}
			else
			{
				$clientDeliveredPieces = 0;
			}
			
			// For Image Replace
			$id = $_REQUEST['id'];
			if($_FILES['materialImage']['name'] !=null)
			{
				$filename=$_FILES['materialImage']['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$path = "uploads/".$id.".".$ext."";
				if(copy($_FILES['materialImage']['tmp_name'], $path))
				{
				
				}	
			}

			//We have kept store in store out and cutting out pieces = 0 as they are 
			//not needed now but they may be used in future.
			//following things have been removed
			// 1) store in pieces
			// 2) store out pieces
			// 3) client out meters
			// 4)entire row of quality
			//following items have been added
			// 1) excess pieces
			
			$sql = "UPDATE stockdata 
					SET `Image`='$path',`StoreInMeter` ='$storeInMeters', `StoreInPieces` = 0,`StoreInDate` = '$storeInDate' ,`StoreOutMeter`=$storeOutMeters,  `StoreOutPieces`=0 ,`StoreOutDate`='$storeOutDate', `CuttingOutMeters`=$cuttingOutMeters, `CuttingOutPieces`=0, `CuttingOutDate`='$cuttingOutDate',`WasteMeter`='$wasteInMeters' ,`ProductionOutMeters`=$productionOutMeters, `ProductionOutPieces`=$productionOutPieces, `ProductionOutDate`='$productionOutDate', `ExcessPieces` = $excessPieces, `ClientDeliveredMeters`=$clientDeliveredMeters, `ClientDeliveredPieces`=$clientDeliveredPieces, `ClientDeliveredDate`='$clientDeliveredDate'
					WHERE id = '$id'";
					
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('Your data has been successfully updated');</script>";
				echo "<script>location.href = 'EditPage.php?styleCode=$styleCode&fabric=$fabric&mill=$mill&brand=$brand&id=$id';</script>";	
			}
	
	?>