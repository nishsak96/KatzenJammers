<!DOCTYPE html>
<html>
<head>
	<title>
		Home-Codeshashtra
	</title>


	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bodyelements.css">
  <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" />

  <script type="text/javascript">
   //document.getElementsByName("fname")[0].placeholder="Enter your name";
  var i=0;
  var quests = new Array("What is your name?","Tell me your branch.","SAP I.D. please","Tell me your gender.","Which year of engineering are you in?","What is your date of birth");
  
    function tellme(x)
    {
        responsiveVoice.speak(quests[x],'Hindi Female');
        console.log("hi");
        startConverting(x);
    }

    function startConverting (x) {
      var e="fname"+(x+1);
      var r= document.getElementsByName(e);
        if('webkitSpeechRecognition' in window){
          var speechRecognizer = new webkitSpeechRecognition();
          speechRecognizer.continuous = true;
          speechRecognizer.interimResults = true;
          speechRecognizer.lang = 'en-IN';
          speechRecognizer.start();
          var finalTranscripts = '';
          speechRecognizer.onresult = function(event){
            var interimTranscripts = '';
            for(var i = event.resultIndex; i < event.results.length; i++){
              var transcript = event.results[i][0].transcript;
              transcript.replace("\n", "<br>");
              if(event.results[i].isFinal){
                finalTranscripts += transcript;
              }else{
                interimTranscripts += transcript;
              }
            }
            $("#"+e).val(finalTranscripts);
            console.log(finalTranscripts);
            //console.log(interimTranscripts);
            document.getElementsByName(e).value = finalTranscripts;
            
          };
          speechRecognizer.onerror = function (event) {
          };
        }else{
          document.getElementsByName(e).value = 'Your browser is not supported. If google chrome, please upgrade!';
        }
      }

  </script>
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
	    				<li><a href="home.php">Home</a></li>
	    				
	    				<li><a href="#">Login</a></li>
              <li><a href="#">Credits</a></li>
	    				<li><a href="#">FAQ</a></li>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
   </div>

<br><br><br>



<div class="container">
  <h2>Register Here!</h2>

  <form class="form-horizontal" method="post">
     <div class="form-group">
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="fname1"  onfocus="tellme(0);" title="Name">
      </div>
    </div>

<div class="form-group">
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="fname2"  onfocus="tellme(1);" title="Branch">
      </div>
    </div>

<div class="form-group">
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="fname3"  onfocus="tellme(2);" title="SAP ID">
      </div>
    </div>

<div class="form-group">
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="fname4"  onfocus="tellme(3);" title="Gender" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="fname5"  onfocus="tellme(4);" title="Engineering year">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-5 ">
        <input type="text" class="form-control" id="fname6"  onfocus="tellme(5);" title="Date of birth" >
      </div>
    </div>
    <div class="form-group" id="subb">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="confirm" onclick="confirmation();">Confirm</button>
      </div>
    </div>  
  </form>

  <div class="container">
    <div class="col-sm-offset-2 col-sm-10">
        <p id="abc"></p>
    </div>
    
  </div>
</div>



</body>
</html>


<?php

    require 'connect.php';

    $columns=array("name","branch","sap","gender","year","dob");

    if(isset($_POST['fname1'])&&isset($_POST['fname2'])&&isset($_POST['fname3'])&&isset($_POST['fname4'])&&isset($_POST['fname5'])&&isset($_POST['fname6']))
    {
      $fname1=@$_POST['fname1'];
      $fname2=@$_POST['fname2'];
      $fname3=@$_POST['fname3'];
      $fname4=@$_POST['fname4'];
      $fname5=@$_POST['fname5'];
      $fname6=@$_POST['fname6'];

      if(!empty($fname1)&&!empty($fname2)&&!empty($fname3)&&!empty($fname4)&&!empty($fname5)&&!empty($fname6))
      {
          $i=$_COOKIE['i'];
          $i=$i+1;
          @setcookie('i',$i,time()+3600);
          $query="INSERT INTO `participanttable`(`name`, `branch`, `sap`, `gender`, `year`, `dob`) VALUES ('"
          .$fname1."','".$fname2."','".$fname3."','".$fname4."','".$fname5."','".$fname6."')";
          $result=mysql_query($query);
      }
      else
      {
        echo '<p align="center">Fill the field</p>';
        
      }

    }

  ?>