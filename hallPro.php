  <?php
  $n = $_POST["name"];
  $s  = $_POST["seat"];
  $l  = $_POST["loc"];

//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "insert into hall values (:bind1, :bind2,:bind3)");
OCIBindByName($s, ":bind1", $n);
OCIBindByName($s, ":bind2", $s);
OCIBindByName($s, ":bind3", $l);

OCIExecute($s, OCI_DEFAULT);


OCICommit($c);
header("location:AdminInsert.php");
 
// Logoff from Oracle
OCILogoff($c);
?>