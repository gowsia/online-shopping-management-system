<html>
<head><title>create_account</title></head>
<body bgcolor="palegreen"><br><br><br>
<?php


$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from create_account";
mysqli_select_db($conn,'online shopping');
$res=mysqli_query($conn,$sql);
echo "<table border size=1 align='center'>";
echo "<tr><th>purchaser_name</th><th>purchaser_id</th><th>password</th><th>moblie_no</th><th>address</th></tr>";
if(!$res)
{
die('could not get data');
}
while($arr=mysqli_fetch_row($res))
{
	echo "<tr>
         <td>{$arr[0]}</td>
		 <td>{$arr[1]}</td>
		  <td>{$arr[2]}</td>
		   <td>{$arr[3]}</td>
		    <td>{$arr[4]}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 $db_host="localhost";
$db_name="online shopping";
$db_user="root";
$db_pass="";
$conn=mysqli_connect("$db_host","$db_user","$db_pass") or die ("could not connect");
mysqli_select_db($conn,'online shopping') or die (mysqli_error($conn));
$p0=mysqli_query($conn,"call total_no_of_offers(@out);");
$rs=mysqli_query($conn,'SELECT @out');
while($row=mysqli_fetch_row($rs))
{
echo "";
}
		 echo "<h2 align='center'>fetched data succeessfully!!!!\n";
		 mysqli_close($conn);
 ?>
 <br>
 <a href="creationindex.html">go back</a></h2><br>
 <a href="creationadmin.html">go back</a></h2><br>
 </body>
</html>