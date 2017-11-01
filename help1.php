<!DOCTYPE html>
<html lang="en">
<head>
<title>Autism Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/css/bootstrap.min.css">
<script src="jquery-2.0.3.min.js"></script>
<script src="bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!---  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--->
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color:navy;color:white">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span><img src="Home.png" width="20" height="20"/>Autism management</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="Index.html">Home</a></li>
      <li ><a href="Autism.php">About Autism</a>
        
      </li>
      <li><a href="#">Communication</a></li>
      <li class="active"><a href="help.html">Help</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </nav>
 <div  class="container">
  
  <div class="row">
  <div class="col-sm-4"> 

  <div class="col-sm-4">
  <?php
  


  $n = $_POST["name"];
  $a = $_POST["address"];
  $con = $_POST["contact"];
  $m = $_POST["mission"];
//echo "mission :".$c."<br/>";


$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))";
if ($c=OCILogon("TARIKUL", "201314062", $db)) {
echo "Successfully connected to Oracle.\n";
//OCILogoff($c);
} else {
$err = OCIError();
echo "Connection failed." . $err[text];
}

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

$stid = oci_parse($c, "SELECT * FROM Autism_society");


// Perform the logic of the query
$r = oci_execute($stid,OCI_DEFAULT);


// Fetch the results of the query
print "<h2>Autism society</h2><table class='table'><thead><tr>
	    <th>NAME</th>
        <th>Address</th>
		<th>Contact</th>
		<th>Mission of society</th></tr> 
    </thead>
    <tbody>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "
      <tr>";
    foreach ($row as $item) {
        print "<td>&nbsp;&nbsp;&nbsp;" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "&nbsp;&nbsp;&nbsp;</td>\n";
    }
    print "</tr>\n";
}
print "</tbody></table>\n";
OCICommit($c);
 
// Logoff from Oracle
OCILogoff($c);
?>
</div>
  <div class="col-sm-4">

  </div>
  
  <div class="col-sm-4"></div>
  </div>
  </div>
</body>
</html>