<?php 
	include 'connect.php';
	$id = $_GET["id"];
	$cid = $_GET["cid"];
	
	$sql = "select * from stockdata where `".$cid."` = '".$id."'";
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
