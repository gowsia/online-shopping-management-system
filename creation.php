<html>
<body bgcolor='red'>
<?php
$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'online shopping') or die(mysqli_error($dbh));
$purchaser_name = $_REQUEST['purchaser_name'];
$purchaser_id = $_REQUEST['purchaser_id'];
$password = $_REQUEST['password'];
$mobile_no = $_REQUEST['mobile_no'];
$address = $_REQUEST['address'];
$query  = "INSERT INTO create_account VALUES ('$purchaser_name','$purchaser_id','$password','$mobile_no','$address')";
$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data successfully inserted!!!";
$var = mysqli_query($dbh,"select * from create_account");
echo "<table border size = 1>";
echo "<tr><th>purchaser_name </th> <th>purchaser_id</th> <th>password</th> <th>mobile_no</th> <th>address</th></tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr><td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td></tr>";
}
echo "</table>";

?>
</body>
</html>