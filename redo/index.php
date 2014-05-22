<!doctype html>
<?php
//File For DB Connection
require "_conn/dip_conn.php"; 
//File For Global Functions 
require "_conn/dip_func.php";
?>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<title>WordDip!</title>
	
	<!-- Bootstrap CDN 3.0 STYLES -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap CDN 3.0 JS -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>	
	<!-- JavaScript plugins (requires jQuery) -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	
	<!-- Custom CSS	 -->
	<link rel="stylesheet" href="_css/styles.css" />

</head>
	<body>
		<div id="wrapper">
		<header class="col-md-12 col-sm-12">
			<div>
				<img id="logo" src="_img/wd_logo.png" alt="Welcome to WordDip!"/>
			</div>
		</header>
		<section class="col-md-12 col-sm-12">
			<form role="form">
			  <div class="form-group">
			    <label for="inputUser">Username:</label>
			    <input type="email" class="form-control" id="inputUser" placeholder="Enter Username">
			  </div>
			  <div class="form-group">
			    <label for="inputPassword">Password:</label>
			    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-primary">Log In</button>
			  <button type="button" class="btn btn-primary pull-right">Create an Account</button>
			</form>
		</section>
		</div><!--wrapper-->
	</body>
</html>