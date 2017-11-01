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
  <h3>Autism management system</h3>
  <p>Autism children are not burden to our society</p>
</div>
<div class="container">
 <div style="background-color:navy; color:white;border-radius:20px;"><h3 align="center">Organaization</h3></div>
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

$stid = oci_parse($c, "
select CONCAT('ORGANIZATION NAME         :',ORG_NAME) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
    print "\n";
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('HEAD OF THE ORGANIZATION  :',HEAD_OF_ORGANIZATION) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
  print "\n";   
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('HEAD OFFICE:',HEAD_OFFICE) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
   print "\n"; 
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('NUMBER OF BRANCH          : ',NUMBER_OF_BRANCH) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
   print "\n"; 
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('ESTABLISHED               : ',ESTABLISHED) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
   print "\n"; 
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('EMAIL                     : ',EMAIL) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
   print "\n"; 
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('WEBSITE                   : ',WEBSITE) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
   print "\n"; 
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('FAX                       : ',FAX) from AUTISM_ORGANIZATION1

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
   print "\n"; 
}
print "<br/>";
$stid = oci_parse($c,"SELECT CONTACT FROM ORG_CONTACT_1");
$r = oci_execute($stid);
print "<table><thead><tr>
	    
		<th>Contact</th>
		</tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
     print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;&nbsp; " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>";
    }
   print "</tr>";
}
print "</tbody></table>\n";
OCILogoff($c);
?>

 

 


</div>
<div class="container">
 <div class="row">
  <div class="col-sm-4">
</div>
    <div class="col-sm-4">


  </div>
  <div class="col-sm-4" style="margin:5px;">
  <div style="background-color:navy; color:white;border-radius:20px;"><h3 align="center">Success</h3></div>
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
$stid = oci_parse($c, "
select CONCAT('Reward         :',Rewards) from Success

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
    print "\n";
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('Venue         :',venue) from Success

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
    print "\n";
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('Year        :',Year) from Success

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
    print "\n";
}
print "<br/>";
$stid = oci_parse($c, "
select CONCAT('Total Price         :',total_winners ) from Success

");


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    
    foreach ($row as $item) {
        print " " . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "\n";
    }
    print "\n";
}
print "<br/>";

OCILogoff($c);
?>
  </div>
</div>
</div>
<div class="container"><div style="background-color:navy; color:white;border-radius:20px;"><h3 align="center">Training</h3></div>
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

$stid = oci_parse($c, 'SELECT * FROM Training');


// Perform the logic of the query
$r = oci_execute($stid);


// Fetch the results of the query
print "<table class='table'><thead><tr>
	    <th>Name</th>
        <th>type of tranning</th>
		<th>Degree</th>	
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
</body>
</html>