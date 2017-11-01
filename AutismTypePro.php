  <?php
  $t = $_POST["tpe"];
  $sy = $_POST["sym"];

//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "insert into Autism values (:bind1, :bind2)");
OCIBindByName($s, ":bind1", $t);
OCIBindByName($s, ":bind2", $sy);

OCIExecute($s, OCI_DEFAULT);


OCICommit($c);
header("location:AdminInsert.php");
 
// Logoff from Oracle
OCILogoff($c);
?>