  	  <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Autism Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include "link.php" ; ?>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color:navy;color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span><img src="Home.png" width="20" height="20"/>Autism management</span></a>
    </div>
   </div>

</nav>
<div class="container">
<nav>
    <div>
	<ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
 
  </div>

</nav>

  <div class="container">
  
  <div class="row">
  <div class="col-sm-4">
<h1 align ="center">Welcome sir,<br/> Admin panel</h1> 
<div align="center"><a href="Admin.php" style="background-color:green;color:white;"align="center">
<button type="button" class="btn btn-default" >Previous</button></a>
</div>
<div  class="col-sm-4">
	<?php
//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
$c=OCILogon("TARIKUL", "201314062", $db);
$stid = oci_parse($c, "select count(student_id)  from student");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
   
    foreach ($row as $item) {
        print "Total student :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;\n";
    }
    print "\n";
}
$stid = oci_parse($c, "select student_id,s.STUDENT_INFO.person_name,school_type,student_class,guardian_name, 
s.STUDENT_INFO.blood_group,
s.STUDENT_INFO.person_dob,
trunc(((to_date('17/05/2016','dd/mm/yyyy')-s.STUDENT_INFO.person_dob)/365),0),
s.STUDENT_INFO.contact_number from student s ");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h1>Student</h1><table class='table'><thead><tr>
	    <th>Student Id</th>
		<th>Student Name</th>
		<th>School</th>
        <th>Class</th>
		<th>Guardian Name</th>
		<th>Blood Group</th>
		<th>Date of Birth</th>
		<th>Age</th>
		<th>Contact</th>
		</tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";


OCICommit($c);
 
// Logoff from Oracle
OCILogoff($c);
?>
</div>
</div>
</html>