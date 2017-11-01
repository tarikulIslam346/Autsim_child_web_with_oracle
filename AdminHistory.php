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
  <div class="col-sm-4"> <h1 align ="center">Welcome sir,<br/> Admin panel</h1> 
  <div align="center"><a href="Admin.php" style="background-color:green;color:white;"align="center">
<button type="button" class="btn btn-default" >Previous</button></a>
</div> 
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

$stid = oci_parse($c, 'SELECT * FROM xauthority');


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query
print "<table class='table'><thead><tr>
	    <th>Id</th>
        <th>Salary</th>
		<th>Start Date</th>	
		
		</tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";
OCILogoff($c);
?>
</div>
</body>
</html>