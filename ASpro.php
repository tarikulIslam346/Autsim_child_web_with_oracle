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
<?php
$sr = $_POST['srch'];
$s = strtolower($sr);
$p = strtoupper($sr);
 //$sr;
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

$stid = oci_parse($c, "select * from autism_society where name like '$s%' OR name like '$p%'");


// Perform the logic of the query
//OCIBindByName($stid, ":bind1", $sr);
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h2>Autism society</h2><table class='table'><thead><tr>
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
        print "<td>&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";
OCICommit($c);
 
// Logoff from Oracle
OCILogoff($c);
?>
</body>
</html>