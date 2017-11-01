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
   </div>
  <div class="col-sm-4">
  <?php
  



//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);




//OCIFreeStatement($sql1);

/*oci_bind_by_name($stid, '$n,$a,$c,$m', $i, 10);
for ($i = 1; $i <= 5; ++$i) {
    oci_execute($stid, OCI_NO_AUTO_COMMIT);  // use OCI_DEFAULT for PHP <= 5.3.1
}
oci_commit($c);*/

$stid = oci_parse($c, "SELECT *FROM Help_VIEW");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h2>Help View</h2><table class='table'><thead><tr>
	    <th> Donor NAME</th>
        <th>Campaign Name</th>

    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
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

  </div>
  
  <div class="col-sm-4"></div>
  </div>
  <div class="row">
  
  <div class="col-sm-4">
    <?php
  



//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);




//OCIFreeStatement($sql1);

/*oci_bind_by_name($stid, '$n,$a,$c,$m', $i, 10);
for ($i = 1; $i <= 5; ++$i) {
    oci_execute($stid, OCI_NO_AUTO_COMMIT);  // use OCI_DEFAULT for PHP <= 5.3.1
}
oci_commit($c);*/

$stid = oci_parse($c, "SELECT *FROM donor");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h2>Donor Table</h2><table class='table'><thead><tr>
	    <th> NAME</th>
        <th>Date</th>
        <th>Amount</th>
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
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
    <?php
  



//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);




//OCIFreeStatement($sql1);

/*oci_bind_by_name($stid, '$n,$a,$c,$m', $i, 10);
for ($i = 1; $i <= 5; ++$i) {
    oci_execute($stid, OCI_NO_AUTO_COMMIT);  // use OCI_DEFAULT for PHP <= 5.3.1
}
oci_commit($c);*/

$stid = oci_parse($c, "SELECT *FROM campaign");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h2>Campaign</h2><table class='table'><thead><tr>
	    <th> NAME</th>
        <th>Date</th>
        <th>Guest</th>
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
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
	<h1>Autism society</h1>
	<form class="form-horizontal" role="form" action="ASpro.php" method="post">
   <div class="form-group">
      <label class="control-label col-sm-2" for="user">Search here:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="type" name="srch" placeholder="Enter ID" >
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <br/><input type="submit" class="btn btn-default" value="go">
      </div>
    </div>
	</form>
<?php
//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);




//OCIFreeStatement($sql1);

/*oci_bind_by_name($stid, '$n,$a,$c,$m', $i, 10);
for ($i = 1; $i <= 5; ++$i) {
    oci_execute($stid, OCI_NO_AUTO_COMMIT);  // use OCI_DEFAULT for PHP <= 5.3.1
}
oci_commit($c);*/

$stid = oci_parse($c, "SELECT *FROM autism_society");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<table class='table'><thead><tr>
	    <th> NAME</th>
        <th>Address</th>
        <th>Contact</th>
		<th> Missin of society</th>
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . 
		"&nbsp;&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";
OCICommit($c);
 
// Logoff from Oracle
OCILogoff($c);
?>
  </div>
  </div>
  </div>
</body>
</html>