<!DOCTYPE html>
<html>
<head>
	<title>Stock Keeper</title>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>  
    <div class="well text-center pageHeader">
                Kavach Fashions
    </div>

    <div class= "container loginDiv">
       
       <form action="loginPage.php" method="POST">
       <div class="userName"> UserName:</div>
       <div class="userNameText"> <input type="text" class = "form-control userNameValue" name="userNameValue"/>
       </div>

       <div class="password"> Password:</div>
       <div class="passwordText"> <input type="password" class = "form-control passwordValue" name="passwordValue"/>
       </div>

       <div class="loginInButtonClass">
       <button class="btn btn-primary logInButton">Log In</button>
        </div>
    </form>
    </div>

</body>
</head>