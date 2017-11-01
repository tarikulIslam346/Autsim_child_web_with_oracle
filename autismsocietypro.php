  <?php
  $n = $_POST["name"];
  $a = $_POST["address"];
  $con = $_POST["contact"];
  $m = $_POST["mission"];
//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "insert into Autism_society values (:bind1, :bind2,:bind3,:bind4)");
OCIBindByName($s, ":bind1", $n);
OCIBindByName($s, ":bind2", $a);
OCIBindByName($s, ":bind3", $con);
OCIBindByName($s, ":bind4", $m);
OCIExecute($s, OCI_DEFAULT);


//OCIFreeStatement($sql1);

/*oci_bind_by_name($stid, '$n,$a,$c,$m', $i, 10);
for ($i = 1; $i <= 5; ++$i) {
    oci_execute($stid, OCI_NO_AUTO_COMMIT);  // use OCI_DEFAULT for PHP <= 5.3.1
}
oci_commit($c);*/


OCICommit($c);
header("location:AdminInsert.php");
 
// Logoff from Oracle
OCILogoff($c);
?>