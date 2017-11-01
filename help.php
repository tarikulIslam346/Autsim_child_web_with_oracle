<!DOCTYPE html>
<html lang="en">
<head>
<title>Autism Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "link.php"; ?>
</head>
<body>
<?php include "header.php"; ?>
 <div  class="container">
  
  <div class="row">
  
  <div class="col-sm-4">
  <div style="background-color:navy; color:white; border-radius:20px;">  <h3 align="center">Research</h3></div>
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

$stid = oci_parse($c, 'SELECT * FROM research_institution');


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query
print "<table class='table'><thead><tr>
	    <th>Name</th>
        <th>Address</th>
		<th>Research topic</th>	
		<th>Contact</th>
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
<div class="col-sm-4"></div>

  <div class="col-sm-4">
  <div style="background-color:navy; color:white;border-radius:20px;"><h3 align="center">Medical Treatment</h3></div>
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

$stid = oci_parse($c, 'SELECT * FROM clinic');


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query
print "<table class='table'><thead><tr>
	    <th> Unit Name</th>
        <th>Specilaity</th>
		<th>Therapy name</th>	
		<th>Contact</th>
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
  </div>
  
  <div class="col-sm-4">
  
  </div>
  </div>
</body>
</html>