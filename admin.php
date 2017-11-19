<!DOCTYPE html>
<html ng-app="stocKeeperAdmin">
<head>
	<title>Stock Keeper</title>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="progressbar.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Angular JS Library-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>


	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
				
		.table-fixed{
		  width: 100%;
			
		}
		 tbody{
			max-height:390px;
			overflow-y:auto;
			width: 100%;
			}
		thead, tbody, tr,td,th{
				display:block;
		}

		.table>tbody>td{
			float:left;
		}
		.table>thead>tr>th{
			   float:left;
		}

		table td[class*=col-]{
			float:left;
		}
	
	</style>
	
	<!-- Custom JS -->
	<script src="ScrollableTable.js"></script>
	<script src="admin.js"></script>

</head>
<body ng-controller="stocKeeperAdminCtrl">  
    <!-- Database connection -->


    <!-- Main page layout -->

    <div class="well text-center pageHeader">
                Kavach Fashions
    </div>
	
	<div class="btnLinks">
		<a href="#" class="btn btn-success btnLinksIn">Main Page</a>
		<a href="#Brand" class="btn btn-primary btnLinksIn">Brand</a>
		<a href="#Fabric" class="btn btn-primary btnLinksIn">Fabric</a>
		<a href="#StyleCode" class="btn btn-primary btnLinksIn">Style Code</a>
		<a href="#Mill" class="btn btn-primary btnLinksIn">Mill</a>
	</div>

	<div class="ng">
		<ng-view></ng-view>
	</div>
   <script type="text/javascript">
    function newEntry()
    {
        window.location = "NewEntry.php";
    }
</script>                                                                                                                   
</body>
</html>


