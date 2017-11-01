  <?php
  $i = $_POST["id"];
  $c = $_POST["class"];

//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "DELETE    from student  
 where STUDENT_ID=:bind1 ");
OCIBindByName($s, ":bind1", $i);
//OCIBindByName($s, ":bind2", $sy);

OCIExecute($s, OCI_DEFAULT);


OCICommit($c);
header("location:AdminDelete.php");
 
// Logoff from Oracle
OCILogoff($c);
?>