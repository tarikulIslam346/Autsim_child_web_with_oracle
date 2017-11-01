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
  <div class="col-sm-4"> <h1 align ="center">Welcome to <br/> Admin panel</h1> 
  <a href="AdminHistory.php" style="color:white;"><button type="button" class="btn btn-default" align="center">History
  </button></a>
    <?php
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
if ($c=OCILogon("TARIKUL", "201314062", $db)) {
echo " ";
//OCILogoff($c);
} else {
$err = OCIError();
echo "Connection failed." . $err[text];
}

$stid = oci_parse($c, 'select authority_id,s.AUTHORITY_INFO.person_name,s.AUTHORITY_INFO.person_dob,salary,admin_id,s.authority_INFO.blood_group,s.authority_INFO.contact_number from authority s');


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query
print "<h1>Authority Details</h1><table class='table'><thead><tr>
	  
		</tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";
OCILogoff($c);
?>
  </div>

  <div class="col-sm-4">

</div>
  <div class="container">
  <div  class="row"> 
     <div class="col-sm-2"> 
   
<h3> Insert here</h3>
<a href="AutismSociety.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Autism society</button></a>
<a href="AutismType.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Autism Type</button></a>


<a href="Transport.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Transport</button></a>
<a href="hall.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Hall</button></a>
<h3>Delete Information</h3>
<a href="Student.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Student</button></a>
<h3> Update here </h3>
<a href="Authority.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Authority</button></a>
<h3>Show Information</h3>
<a href="StudentShow.php" style="color:white;"><button type="button" class="btn btn-primary btn-block">Student</button></a>
</div>
  </div>
  </div>

  </div>
</body>
</html>