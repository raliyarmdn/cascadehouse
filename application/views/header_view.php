
<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "My CI Site" ?> </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
 <link href='http://fonts.googleapis.com/css?family=Exo+2:200' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
 <style type="text/css">
 	@charset "utf-8";
	/* CSS Document */
	body{
	background-color:#FFF;
	font-family: 'Exo 2', sans-serif;
	font-size:16px;
	text-shadow:rgba(0,0,0,0.01) 0 0 0;
	}
	#wrapper{
    width:960px;
    margin:0 auto;
	}
	#content{
	    width:620px;
	    margin:5px;
	    float:left;
	}
	.message_form{
	    width:550px;
	    padding:20px 20px 0px 40px;
	    border:1px dashed #A0A0A4;
	}
	.name_field label, .mail_field label, .message_field label{
	font-weight: bold;
	}
	.message_field label{
	    float: left;
	}
	.name_field{
	    width:250px;
	    float:left;
	}
	.mail_field{
	    width:250px;
	    float:left;
	}
	.message_form input[type="text"]{
	    width: 170px;
	}
	.message_form textarea{
	width: 490px;
	height: 70px;
	}
	.message_show{
	    border-bottom:1px dashed #A0A0A4;
	}
	#wrapper{
	width:960px;
	margin:0 auto;
	}
	#content{
	width:960px;
	margin:5px;
	float:left;
	}


	/************************************************/
	.signup_wrap{
	height:25px;
	width:100%;
	padding:5px;
	background-color:#2A1FFF;
	}
	.signin_form{
	float:right;
	}
	.signin_form input{
	width:80px;
	}
	.reg_form{
	width:460px;
	padding:20px;
	margin:0 auto;
	border:3px solid #DFDFDF;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#cbd4e5));
	background: -moz-linear-gradient(top,  #fff,  #cbd4e5);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#cbd4e5');
	}
	.form_title,
	.form_sub_title{
	font-size:20px;

	font-family:"Lucida Grande",Tahoma,Verdana,Arial,sans-serif;
	font-size:20px;
	font-weight:bold;
	}
	.form_sub_title{
	font-weight:normal;
	padding:6px 0 15px 0;
	}
	.reg_form p{
	width: 300px;
	clear: left;
	margin: 0;
	padding: 5px 0 8px 0;
	padding-left: 155px; /*width of left column containing the label elements*/
	border-top: 1px dashed gray;
	height: 1%;
	}
	.reg_form label{
	font-weight: bold;
	float: left;
	margin-left: -155px; /*width of left column*/
	width: 150px; /*width of labels. Should be smaller than left column (155px) to create some right margin*/
	}
	input{
	padding:3px;
	color:#333333;
	border:1px solid #96A6C5;
	margin-top:2px;
	width:180px;
	font-size:11px;
	}
	.greenButton{
	width:auto;
	margin:10px 0 0 2px;
	padding:3px 4px 3px 4px;
	color:white;
	background-color:#589d39;
	outline:none;
	border:1px solid #006600;
	font-weight:bold;
	}
	.greenButton:active{
	background-color:#006600;
	padding:4px 3px 2px 5px;
	}
	.error{
	color:#F00;
	}
	#footer{
	color:#fff;
	padding-top:20px;
	text-align:center;
	background: #454546; 
	height: 20px;
	clear:both;
	}
	body {
	  font-family: 13px/20px 'Exo 2', sans-serif;
	  color: #404040;
	  background: #efefef;
	}

	.sign-up {
	  position: relative;
	  margin: 50px auto;
	  width: 280px;
	  padding: 33px 25px 29px;
	  background: white;
	  border-bottom: 1px solid #c4c4c4;
	  border-radius: 5px;
	  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
	  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
	}
	.sign-up:before, .sign-up:after {
	  content: '';
	  position: absolute;
	  bottom: 1px;
	  left: 0;
	  right: 0;
	  height: 10px;
	  background: inherit;
	  border-bottom: 1px solid #d2d2d2;
	  border-radius: 4px;
	}
	.sign-up:after {
	  bottom: 3px;
	  border-color: #dcdcdc;
	}

	.sign-up-title {
	  margin: -25px -25px 25px;
	  padding: 15px 25px;
	  line-height: 35px;
	  font-size: 26px;
	  font-weight: 300;
	  color: #aaa;
	  text-align: center;
	  text-shadow: 0 1px rgba(255, 255, 255, 0.75);
	  background: #f7f7f7;
	}
	.sign-up-title:before {
	  content: '';
	  position: absolute;
	  top: 0;
	  left: 0;
	  right: 0;
	  height: 8px;
	  background: #c4e17f;
	  border-radius: 5px 5px 0 0;
	  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	}

	input {
	  font-family: inherit;
	  color: inherit;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	}

	.sign-up-input {
	  width: 100%;
	  height: 50px;
	  margin-bottom: 25px;
	  padding: 0 15px 2px;
	  font-size: 17px;
	  background: white;
	  border: 2px solid #ebebeb;
	  border-radius: 4px;
	  -webkit-box-shadow: inset 0 -2px #ebebeb;
	  box-shadow: inset 0 -2px #ebebeb;
	}
	.sign-up-input:focus {
	  border-color: #62c2e4;
	  outline: none;
	  -webkit-box-shadow: inset 0 -2px #62c2e4;
	  box-shadow: inset 0 -2px #62c2e4;
	}
	.lt-ie9 .sign-up-input {
	  line-height: 48px;
	}

	.sign-up-button {
	  position: relative;
	  vertical-align: top;
	  width: 100%;
	  height: 54px;
	  padding: 0;
	  font-size: 22px;
	  color: white;
	  text-align: center;
	  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
	  background: #f0776c;
	  border: 0;
	  border-bottom: 2px solid #d76b60;
	  border-radius: 5px;
	  cursor: pointer;
	  -webkit-box-shadow: inset 0 -2px #d76b60;
	  box-shadow: inset 0 -2px #d76b60;
	}
	.sign-up-button:active {
	  top: 1px;
	  outline: none;
	  -webkit-box-shadow: none;
	  box-shadow: none;
	}

	:-moz-placeholder {
	  color: #ccc;
	  font-weight: 300;
	}

	::-moz-placeholder {
	  color: #ccc;
	  opacity: 1;
	  font-weight: 300;
	}

	::-webkit-input-placeholder {
	  color: #ccc;
	  font-weight: 300;
	}

	:-ms-input-placeholder {
	  color: #ccc;
	  font-weight: 300;
	}

	::-moz-focus-inner {
	  border: 0;
	  padding: 0;
	}

	.membr{
		font-size: 20px;
	}

	span a{
		color: white;
	}

	.cr a{
		color:black;
	}

	.row{
		margin-right: 15%;
		margin-left:15%;
	}

	#delete{
	  position: relative;
	  vertical-align: top;
	  width: 30%;
	  height: 34px;
	  padding: 0;
	  font-size: 15px;
	  color: white;
	  text-align: center;
	  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
	  background: #f0776c;
	  border: 0;
	  border-bottom: 2px solid #d76b60;
	  border-radius: 5px;
	  cursor: pointer;
	  -webkit-box-shadow: inset 0 -2px #d76b60;
	  box-shadow: inset 0 -2px #d76b60;
	}

	#name{
		background-color: transparent;
		border: none;
		font-size: 15px;
	}

	#message{
		border-radius: 5px 5px 0 0;
	}

 </style>
</head>
<body>
 <div id="wrapper">