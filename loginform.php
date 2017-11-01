<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Autism Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "link.php" ;?>
</head>
<body>
<?php include "header.php" ;?>
<div class="container">
 <div class="row">
  <div class="col-sm-4">
  	<?php
  



//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);
$stid = oci_parse($c, "select count(student_id)  from student");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print "Total student :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;\n";
    }
    print "\n";
}
$stid = oci_parse($c, "SELECT * FROM Student_VIEW ");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h1>Student view</h1><table class='table'><thead><tr>
	    <th>Student Id</th>
		<th>Student Name</th>
        <th>School</th>
		<th>Date of Birth</th>
		<th>Age</th>
		</tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";


OCICommit($c);
 
// Logoff from Oracle
OCILogoff($c);
?>
  </div>
  	<div class="col-sm-4" >
	<?php

//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);


$stid = oci_parse($c, "SELECT * FROM authority_VIEW ");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h1>Athuority view</h1><table class='table'><thead><tr>
	    <th>Athourity Name</th>
        <th>Contact</th>
		
		</tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";
OCICommit($c);
 
// Logoff from Oracle
OCILogoff($c);
?>
</div>
  <div class="col-sm-4">

  <h2 align="center">Login For Admin</h2>
  <form class="form-horizontal" role="form" method="post" action="login.php">

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
     <div class="checkbox">
    <label><input type="checkbox" name="chk"> Admin</label>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  <h2 align="center">Login For Student</h2>
  <form class="form-horizontal" role="form" method="post" action="loginSt.php">

    <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="guardian">Gaurdian Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="g_name" placeholder="Enter guardian name" name="g_name">
      </div>
    </div>
     <div class="checkbox">
    <label><input type="checkbox" name="chk"> Student</label>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
    <div class="col-sm-4"> 
	</div> 
	</div>
	</div><!-- end of container class-->
	
	<div class="container">
	<div class="row">
	<div class="col-sm-4" >

</div>
<div class="col-sm-4"></div>
<div class="col-sm-4"> </div>
</div>
</div><!-- end of container-->

</body>
</html>