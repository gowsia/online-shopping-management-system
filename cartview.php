<html>
<head><title>cart</title></head>
<body bgcolor="palegreen"><br><br><br>
<?php


$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from cart_details";
mysqli_select_db($conn,'online shopping');
$res=mysqli_query($conn,$sql);
echo "<table border size=1 align='center'>";
echo "<tr><th>product_name</th><th>amount</th></tr>";
if(!$res)
{
die('could not get data');
}
while($arr=mysqli_fetch_row($res))
{
	echo "<tr>
         <td>{$arr[0]}</td>
		 <td>{$arr[1]}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 $db_host="localhost";
$db_name="online shopping";
$db_user="root";
$db_pass="";
$conn=mysqli_connect("$db_host","$db_user","$db_pass") or die ("could not connect");
mysqli_select_db($conn,'online shopping') or die (mysqli_error($conn));
$p0=mysqli_query($conn,"call total_no_of_customer(@out);");
$rs=mysqli_query($conn,'SELECT @out');
while($row=mysqli_fetch_row($rs))
{
echo "<h2 align='center'> $row[0]<br><br>";
}
		 echo "<h2 align='center'>fetched data succeessfully!!!!\n";
		 mysqli_close($conn);
 ?>
 <br>
 <a href="cartindex.html">go back</a></h2><br>
 </body>
</html>