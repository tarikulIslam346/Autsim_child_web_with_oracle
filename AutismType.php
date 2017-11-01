  <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Autism Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "link.php" ; ?>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color:navy;color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span><img src="Home.png" width="20" height="20"/>Autism management</span></a>
    </div>
   </div>

</nav>
<div class="container">
<nav>
    <div>
	<ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
 
  </div>

</nav>

  <div class="container">
  
  <div class="row">
  <div class="col-sm-4">
<h1 align ="center">Welcome sir,<br/> Admin panel</h1>  
<div align="center"><a href="Admin.php" style="background-color:green;color:white;"align="center">
<button type="button" class="btn btn-default" >Previous</button></a>
</div>
  </div>
   <div class="col-sm-4"> 
   
<h1> Insert value for Autism Society</h1>
  <form class="form-horizontal" role="form" action="AutismTypePro.php" method="post">
   <div class="form-group">
      <label class="control-label col-sm-2" for="user">Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="type" name="tpe" placeholder="Enter Autism type" >
      </div>
    </div> <div class="form-group">
      <label class="control-label col-sm-2" for="user">Symptom:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="symptomps"  name="sym" placeholder="Enter Dieseas symptomps" >
      </div>
     <br/>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <br/><input type="submit" class="btn btn-default">
      </div>
    </div>
  </form>