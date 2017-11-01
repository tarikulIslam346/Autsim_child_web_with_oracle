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
  <div class="col-sm-4"> <h1 align ="center">Welcome </h1 >


  </div>

  <div class="col-sm-4">
  <h1> Insert value for Student</h1>
  <form class="form-horizontal" role="form" action="StPro.php" method="post">
   <div class="form-group">
      <label class="control-label col-sm-2" for="user">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="type" name="id" placeholder="Enter ID" >
      </div>
    </div>
	<br/>

	
     
     <div class="form-group">
      <label class="control-label col-sm-2" for="user">Class:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dob"  name="class" placeholder="Enter class" >
      </div>
	</div>
     
	 
	 
     <br/>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <br/><input type="submit" class="btn btn-default">
      </div>
    </div>
  </form>

</div>
  <div class="container">
  <div  class="row">
     <div class="col-sm-2"> 
   

</div>
  </div>
  </div>

  </div>
</body>
</html>