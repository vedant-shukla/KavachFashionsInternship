<?php

include 'connect.php';

if(isset($_POST["userNameValue"]) && strcmp($_POST["userNameValue"],"hinay") == 0 && strcmp($_POST["passwordValue"],"kavach@123fashions") == 0 ){
    
    //if it is the admin than ridirect to admin.php
    ?>
    <script>
        window.location = "admin.php";
    </script>
 <?php   

}

//checking for employee
$sql = "Select * from userdata where UserName = '" . $_POST["userNameValue"]."' and Password = '".$_POST["passwordValue"]."'";


if ( mysqli_query($conn,$sql) && mysqli_affected_rows($conn)  > 0)
{
    
    ?>
    <script>
        window.location = "MainPage.php";
    </script>
 <?php

}
else
{
    ?>
    <script>
        alert("Please enter correct username and password");
        window.location = "index.php";
    </script>
 <?php
    
}


?>