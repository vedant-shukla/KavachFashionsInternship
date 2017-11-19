
        <?php
        include 'connect.php';
        $sql = 'Select * from stockdata';
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