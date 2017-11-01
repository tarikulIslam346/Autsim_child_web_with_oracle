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
 <div  class="container">
  
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

$stid = oci_parse($c, "SELECT * FROM TRANSPORTATION ");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h1>Transportation</h1><table class='table' style='border:2px;'><thead><tr>
	    <th>Serial no</th>
        <th>Veichle type</th>
		<th>Route</th>
		</tr> 
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

$stid = oci_parse($c, "SELECT * FROM hall ");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h1>Hall</h1><table class='table'><thead><tr>
	    <th>Name</th>
        <th>Seat</th>
		<th>Location</th>
		</tr> 
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
  </div>
  <div class="row">
  <div class="col-sm-4">   <?php
  



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

$stid = oci_parse($c, "SELECT * FROM Necessaries_shop ");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h1>Shop</h1><table class='table' style='border:2px;'><thead><tr>
	    <th>PRODUCT NO</th>
        <th>PRODUCT NAME</th>
		<th>PRICE</th>
		<th>VAT</th>
		<th>BOOKSTORE</th>
		<th>STUDENT ID</th>
		<th>PRICE INCLUDING VAT</th>
		</tr> 
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
?></div>
  </div>
  </div>
</body>
</html>