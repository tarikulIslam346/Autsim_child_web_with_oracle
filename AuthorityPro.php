  <?php
  $id = $_POST["id"];
    $salary = $_POST["salary"];



//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);

$s = OCIParse($c, "update  authority SET salary = :bind2 where authority_id= :bind1");
OCIBindByName($s, ":bind1", $id);
OCIBindByName($s, ":bind2", $salary);
/*OCIBindByName($s, ":bind3", $dob);
OCIBindByName($s, ":bind4", $Admin);
OCIBindByName($s, ":bind5", $name);
OCIBindByName($s, ":bind6", $bg);
OCIBindByName($s, ":bind7", $bd);
OCIBindByName($s, ":bind8", $contact);*/
OCIExecute($s, OCI_DEFAULT);


OCICommit($c);
header("location:AdminInsert.php");
 
// Logoff from Oracle
OCILogoff($c);
?>