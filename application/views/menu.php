<?php 
	session_start();
?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
 		<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Exo+2:200' rel='stylesheet' type='text/css'>
	    <title>Cascade House</title>
	    <style>

	    	body { 
				padding-top: 30px; 
				font-family: 'Exo 2', sans-serif;
			}

			.nav a {
			  color: #ffffff;
			  font-size: 17px;
			  padding-left: 10px;
			  padding-right: 10px;
			  padding-top: 100px;
			  padding-bottom: 0;
			  text-transform: uppercase;
			  margin-top: 50px;
			}

			.nav li {
			  display: inline;
			  padding-top: 100px;
			  margin-bottom: 0px;
			  margin-top: 50px;
			  color: white;
			}

			.jumbotron {
			  background-image:url('http://s28.postimg.org/9i4oaw23x/2014_02_28_12_02_33.jpg');
			  height: 487px;
			  background-repeat: no-repeat;
			  background-size: cover;
			}

			.jumbotron .container {
			  position: relative;
			  top:100px;
			}
			.judul {

			  font-family: 'Pacifico', cursive;
			  font-weight: bold;
			  font-size:120px;
			  color : white;
			}

			.jumbotron p {
			  font-size: 19px;
			  color: #fff;
			  font-family: 'PT Sans', sans-serif;
			  font-style: italic;
			}

			.learn-more {
			  background-color: #424242;
			  height: 250px;
			}

			.learnmore h3 {
			  font-family: 'Shift', sans-serif;
			  font-size: 18px;
			  font-weight: bold;
			  color: #fff;
			}

			.learnmore p {
			  color: #fff;
			}

			.learnmore a {
			  color: #FFEFD5;
			}

			.learnmore {
			  background-color: #DB7093;
			}

			.learn-more h3 {
			  font-family: 'Bree Serif', serif;
			  font-size: 20px;
			  font-weight: bold;
			  color: #fff;
			}

			.learn-more p {
			  color: #fff;
			  
			}

			.learn-more a {
			  color: #DB7093;
			}

			.neighborhood-guides {
			    background-color: #efefef;
			    border-bottom: 1px solid #dbdbdb;
			}

			.neighborhood-guides h2 {
			    color: #393c3d;
			    font-size: 24px;
			    text-transform: uppercase;

			}

			.neighborhood-guides h3 {
			  font-size: 19px;
			  margin-bottom: 13px;
			  
			}

			.neighborhood-guides p {
			    font-size: 15px;
			    margin-bottom: 13px;
			}

			.head p {
			  font-size: 21px;
			  color: #CECECE;
			  font-family: 'PT Sans', sans-serif;
			  font-style: italic;
			  font-style: bold;
			  opacity: 0.5;
			}

			.head {
			  background-image: url('http://s24.postimg.org/b7vi21n7p/2014_02_28_12_02_33.jpg');
			  height: 200px;
			  background-repeat: no-repeat;
			  background-size: cover;
			}


			.head h1 {
			  color: #FFF;
			  font-size: 120px;  
			  font-family: 'Pacifico', cursive;
			  font-weight: bold;
			}

			.copyright {
			  background-color: #424242;
			  height: 15px;
			}

			.copyright p {
			  color: white;
			  font-size: 13px;
			  text-align: center;
			}

			#login {
			  padding-top: 3px;
			  padding-bottom: 3px;
			  padding-left: 2px;
			  padding-right: 2px;
			  border-radius: 5px 5px;
			  background-color: #FF5a60;
			  color: white;
			}

			#down {
				border: #464646 2px solid;
				background-color: #464646;
			  	color: white;
			  	padding-top: 3px;
			 	padding-bottom: 5px;
			 	padding-right: 3px;
			 	padding-left: 3px;
			  	border-radius: 10px 10px;
			  	text-align: right;
			}

			#menu{
			  background-color: #000;
			}

			#counter{
				color: white;
				font-size: 20px;
			}

	    </style>
 	</head>
 	<body>
 		<div id="menu">
 			<div class="nav">
 				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			  		<div class="container">
				        <ul class= "pull-left menu">
				          <li><a href="http://localhost/ci/">Home</a></li>
				          <li><?php echo anchor('user/facility', 'Facility'); ?></li>
				          <li><?php echo anchor('user/price', 'Price'); ?></li>
				        </ul>
				        <ul class="pull-right menu">
				          <li>

				          </li>
				          <li id="login"><?php echo anchor('user/welcome', 'Warga Cascade'); ?></li>
				        </ul>
				    </div>
				</nav>
			</div>
		</div>
 	</body>
</html>