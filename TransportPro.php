  <?php
  $id = $_POST["id"];
  $v  = $_POST["v"];
  $r  = $_POST["r"];

//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "insert into Transportation values (:bind1, :bind2,:bind3)");
OCIBindByName($s, ":bind1", $id);
OCIBindByName($s, ":bind2", $v);
OCIBindByName($s, ":bind3", $r);

OCIExecute($s, OCI_DEFAULT);


OCICommit($c);
header("location:AdminInsert.php");
 
// Logoff from Oracle
OCILogoff($c);
?>