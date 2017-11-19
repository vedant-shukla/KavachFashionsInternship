<?php

	include 'connect.php';
	//for styleCode
	
	

	
	if( isset($_POST["styleCode"]) && strlen($_POST["styleCode"]) > 0 )
	{
		$styleCode = $_POST["styleCode"];
	}
	else
	{
		$styleCode = "";
	}


	//for mill
	if( isset($_POST["mill"]) && strlen($_POST["mill"]) > 0 )
	{
		$mill = $_POST["mill"];
	}
	else
	{
		$mill = "";
	}

	//for fabric
	if( isset($_POST["fabric"]) && strlen($_POST["fabric"]) > 0 )
	{
		$fabric = $_POST["fabric"];
	}
	else
	{
		$fabric = "";
	}
	
	//for brand
	if( isset($_POST["brand"]) && strlen($_POST["brand"]) > 0 )
	{
		$brand = $_POST["brand"];
	}
	else
	{
		$brand = "";
	}
	
	//for storeInDate
	if( isset($_POST["storeInDate"]) && strlen($_POST["storeInDate"]) > 0 )
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

	
	//for storeOutDate
	if( isset($_POST["storeOutDate"]) && strlen($_POST["storeOutDate"]) > 0 )
	{
		$storeOutDate = $_POST["storeOutDate"];
	}
	else
	{
		$storeOutDate = "";
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

	//for excess pieces:
	if( isset($_POST["excessPieces"]) && strlen($_POST["excessPieces"]) > 0 )
	{
		$excessPieces = $_POST["excessPieces"];
	}
	else
	{
		$excessPieces = 0;
	}

	//for clientOutDate
	if( isset($_POST["clientOutDate"]) && strlen($_POST["clientOutDate"]) > 0 )
	{
		$clientOutDate = $_POST["clientOutDate"];
	}
	else
	{
		$clientOutDate = "00/00/0000";
	}

	//for clientOutMeters
	if( isset($_POST["clientOutMeters"]) && strlen($_POST["clientOutMeters"]) > 0 )
	{
		$clientOutMeters = $_POST["clientOutMeters"];
	}
	else
	{
		$clientOutMeters = 0;
	}

	//for clientOutPieces
	if( isset($_POST["clientOutPieces"]) && strlen($_POST["clientOutPieces"]) > 0 )
	{
		$clientOutPieces = $_POST["clientOutPieces"];
	}
	else
	{
		$clientOutPieces = 0;
	}

	//calculating waste meter and waste in date
	if(isset($_POST["cuttingOutMeters"]) && strlen($_POST["cuttingOutMeters"]) > 0 && isset($_POST["storeOutMeters"]) && strlen($_POST["storeOutMeters"]) > 0 )
	{
		$wasteInMeters = $_POST["storeOutMeters"] - $_POST["cuttingOutMeters"];
	}
	else
	{
		$wasteInMeters = 0;
	}

		

	//inserting into database
	//TODO:insert waste meter and waste pieces correctly
	$sql = "INSERT INTO stockdata
			(`StyleCode`, `Fabric`, `Mill`, `Brand`,`StoreInMeter`, `StoreInDate`, `StoreOutMeter`, `StoreOutDate`, `CuttingOutMeters`,  `CuttingOutDate`, `WasteMeter`, `WastePieces`, `ProductionOutMeters`, `ProductionOutPieces`, `ProductionOutDate`,`ExcessPieces` ,`ClientDeliveredMeters`, `ClientDeliveredPieces`, `ClientDeliveredDate`)
			VALUES('$styleCode','$fabric','$mill','$brand',$storeInMeters,'$storeInDate',
					$storeOutMeters,'$storeInDate',
					$cuttingOutMeters,'$cuttingOutDate',
					$wasteInMeters,0,
					$productionOutMeters,$productionOutPieces,'$productionOutDate',
					$excessPieces,
					$clientOutMeters,$clientOutPieces,'$clientOutDate')";

	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Your data has been successfully inserted');</script>";

	}
	else{
		echo "sadsad";
	}
	
	// For Image Upload
	$id= mysqli_insert_id($conn);
	if($_FILES['materialImage']['name'] !=null)
		{
			$filename=$_FILES['materialImage']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$path = "uploads/".$id.".".$ext."";
			if(copy($_FILES['materialImage']['tmp_name'], $path))
			{
				
				$query1 = "update `stockdata` set `Image`='$path' where `id` = '$id'";
				$row1= mysqli_query($conn, $query1);
			}	
		}
	echo "<script>location.href = 'MainPage.php';</script>";		

?>