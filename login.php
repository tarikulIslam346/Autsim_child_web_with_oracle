

<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$check=$_POST['chk'];
$status="OK";
$msg="";

if(!stristr($email,"@") OR !stristr($email,"."))
{
	$msg .= "Enter your correct email address.";
	$status="NOTOK";
}
if(empty($password))
{
	$msg .= "Enter your password.";
	$status="NOTOK";
}
if(empty($check))
{
	$msg .= "Click here.";
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
$stid = oci_parse($c, "SELECT * FROM Admin WHERE email=:bind1 AND password=:bind2");
OCIBindByName($stid, ":bind1", $email);
OCIBindByName($stid, ":bind2", $password);

// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);
$fetch = oci_fetch_row($stid);
$count = oci_num_rows($stid);
//echo $count;
if($count==1)
{
	$row = oci_fetch_array($stid);
	$_SESSION['username'] = $row['name'];
	header("location:admin.php");
	
}else{
	echo "wrong eamil or password.";
}	
}else{
	echo $msg;
}
?>