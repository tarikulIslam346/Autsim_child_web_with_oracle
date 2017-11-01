<?php
session_start();
$id=$_POST['id'];
$g_name=$_POST['g_name'];
$check=$_POST['chk'];
$status="OK";
$msg="";


if(empty($id))
{
	$msg .= "Enter your Id.";
	$status="NOTOK";
}
if(empty($g_name))
{
	$msg .= "Enter your Guardian name.";
	$status="NOTOK";
}
if(empty($check))
{
	$msg .= "Click this checkbox.";
	$status="NOTOK";
}
if($status=="OK")
{
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
if ($c=OCILogon("TARIKUL", "201314062", $db)) {
echo "Successfully connected to Oracle.\n";
//OCILogoff($c);
} else {
$err = OCIError();
echo "Connection failed." . $err[text];
}
$stid = oci_parse($c, "select student_id,guardian_name from student  where student_id=:bind1 AND guardian_name=:bind2  ");
OCIBindByName($stid, ":bind1", $id);
OCIBindByName($stid, ":bind2", $g_name);

// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);
 oci_fetch_row($stid);
$count = oci_num_rows($stid);
//echo $count;
if($count==1)
{
	$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS);
	//$collect = $row['student_id'];
	$_SESSION['id'] = $row['student_id'];
	//$_SESSION['name'] = $row['s.STUDENT_INFO.person_name'];
	header("location:st.php");
	
}else{
	echo "wrong id or gurdian name.";
}	
}else{
	echo $msg;
}
?>