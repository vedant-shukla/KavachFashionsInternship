<?php 
	include 'connect.php';
	$var = $_GET["id"];
	if($var=="Brand"){
		$sql = 'Select SUM(StoreOutMeter) as StoreOutMeter,SUM(CuttingOutMeters) as CuttingOutMeters,SUM(ExcessPieces) as ExcessPieces,Brand as A from stockdata GROUP BY Brand';
	}else if($var=="Fabric"){
		$sql = 'Select SUM(StoreOutMeter) as StoreOutMeter,SUM(CuttingOutMeters) as CuttingOutMeters,SUM(ExcessPieces) as ExcessPieces,Fabric as A from stockdata GROUP BY Fabric';
	}else if($var=="StyleCode"){
		$sql = 'Select SUM(StoreOutMeter) as StoreOutMeter,SUM(CuttingOutMeters) as CuttingOutMeters,SUM(ExcessPieces) as ExcessPieces,StyleCode as A from stockdata GROUP BY StyleCode';
	}else{
		$sql = 'Select SUM(StoreOutMeter) as StoreOutMeter,SUM(CuttingOutMeters) as CuttingOutMeters,SUM(ExcessPieces) as ExcessPieces,Mill as A from stockdata GROUP BY Mill';
	}
	
    $result = mysqli_query($conn,$sql);
        
    if(mysqli_num_rows($result)> 0){
        while($row = mysqli_fetch_assoc($result))
            {
				$data[] = $row; 
            }
    } else {
		echo "No Record Found";
	};
	
	print json_encode($data);
	
?>
