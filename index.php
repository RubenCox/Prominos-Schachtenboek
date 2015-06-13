<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Prominos SchachtenBoek</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>SchachtenBoek</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="registreer.html">Registreer</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap">
		<div class="container">
			<div class="row">
			<?php
	require_once "php/taskmodel.php";
	$conn = connect();

	?>
				<div class="col-lg-4">
					<h1>Login</h1>
					<form class="form-inline" role="form">
					  <div class="form-group">
					    <input type="text" class="form-control" id="regNaam" placeholder="Enter your name">
						<input type="password" class="form-control" id="regWW1" placeholder="Enter your password">
					  </div>
					  <button type="submit" class="btn btn-warning btn-lg">Login</button>
					</form>					
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-responsive" src="assets/img/ipad-hand.png" alt="SchachtenBoek">
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<h1>Registreer</h1>
					<a href="registreer.html"><img src="assets/img/ser01.png" width="180" alt=""></a>
					<h1>Nu!</h1>
									
				</div><!-- /col-lg-4 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->

	
	<div class="container">
		<hr>
		<div class="row centered">
			<div class="col-lg-6 col-lg-offset-3">
				<form class="form-inline" role="form">
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
				  </div>
				  <button type="submit" class="btn btn-warning btn-lg">Invite Me!</button>
				</form>					
			</div>
			<div class="col-lg-3"></div>
		</div><!-- /row -->
		<hr>
		<p class="centered">Created by Ruben Cox - 2015</p>
	</div><!-- /container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>