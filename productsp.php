<html>
<body bgcolor='red'>
<?php
$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'online shopping') or die(mysqli_error($dbh));
$product_name = $_REQUEST['product_name'];
$product_id = $_REQUEST['product_id'];
$price = $_REQUEST['price'];
$query  = "INSERT INTO product_details VALUES ('$product_name','$product_id','$price')";
$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data successfully inserted!!!";
$var = mysqli_query($dbh,"select * from product_details");
echo "<table border size = 1>";
echo "<tr><th>product_name </th> <th>product_id</th> <th>price</th> </th></tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
}
    
echo "</table>";
?>
</body>
</html>