  <?php
  $id = $_POST["id"];
    $c = $_POST["class"];



//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "update  student SET student_class =:bind1 where student_id =:bind2");
OCIBindByName($s, ":bind1", $c);
OCIBindByName($s, ":bind2", $id);
/*OCIBindByName($s, ":bind3", $dob);
OCIBindByName($s, ":bind4", $Admin);
OCIBindByName($s, ":bind5", $name);
OCIBindByName($s, ":bind6", $bg);
OCIBindByName($s, ":bind7", $bd);
OCIBindByName($s, ":bind8", $contact);*/
OCIExecute($s, OCI_DEFAULT);


OCICommit($c);
header("location:StInsert.php");
 
// Logoff from Oracle
OCILogoff($c);
?>