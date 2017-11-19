
        <?php
        include 'connect.php';
		$var = $_GET["id"];
        $sql = 'Select * from stockdata where id ='.$var.'';
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)> 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
				$data[] = $row; 
            }
        } else {
			echo "No Record Found";
		};
        
		print json_encode($data);
		mysqli_close($conn);
        
        ?>
		