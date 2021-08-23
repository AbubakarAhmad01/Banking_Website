<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/sb-style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<style>	
.register{
    display: grid;
    height: 50px;
    width: 300px;
    background: linear-gradient(
        #9365ff,
        #6f3bff
    );
    position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    top: -200px;
    bottom: 0;
    place-items: center;
    font-family: "Poppins",sans-serif;
    color: #ffffff;
    font-size: 20px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 3px;
    border-radius: 5px;
}	

.leftmenu{
	width: 20%;
	margin-top:40px;
	line-height: 100px;
	float: left;
	
}

.bold{
font-weight:bold;
}

.rightmenu ul li {
	font-family: 'Montserrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: 40px;
	text-transform: uppercase;

}

</style>
</head>
<body>

	<div class="bgimage">
		<?php
  include 'navbar.php';
  ?>

		<div class="text">
			
			<h1 class="bold">Welcome To RBI BANK</h1>
			
			
		<a href="newuser.php" class="register"	> Register Yourself </a>
		</div>

	</div>

</body>
</html>