<!DOCTYPE html>
<html>
<head>
	<title>
		Home-Codeshashtra
	</title>


	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bodyelements.css">

</head>
<body>


	<div class="container-fluid" style="background-color:#0034ff; padding-top:10px; padding-bottom:10px; border:1px solid black; height: 105px; position:relative;">
		&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
		<font style="font-size:30px; top:50%; position:absolute;">Welcome to Codeshastra</font>
	</div>
	<div id="ppp"></div>
<br>
	<div class="container-fluid" >
	    <div class=" navbar navbar-default">
	    	<div class="container">
	    		<div class="navbar-header">
	    			<a href="#" class="navbar-brand">Cosmic Developers</a>
	    		</div>
	    		<div>
	    			<ul class="nav navbar-nav">
	    				<li><a href="#">Home</a></li>
	    				<li><a href="#">Login</a></li>
              			<li><a href="#">Credits</a></li>
	    				<li><a href="#">FAQ</a></li>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
   </div>


<br><br><br><br><br><br><br><br><br>


<div class="container">
	<div>
	<div class="col-sm-offset-5">
		<button class="btn btn-primary btn-lg" type="submit" name="reg" onclick="window.location='codeReg.php'">Register!</button>
	</div>
</div>

<?php
if(isset($_POST['reg']))
{
	setcookie('i',-1,time()+3600);
	echo '<script type="text/javascript">window.location="codeReg.php";</script>';
}

?>





</body>
</html>