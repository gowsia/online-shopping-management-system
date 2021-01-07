<html>
<style>
body {
background-image:
url('cart1.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
}
</style>
<body bgcolor="palegreen">
<?php
if(isset($_POST['retrieve']))
{

$conn=mysqli_connect("localhost","root","",'online shopping');
if(!$conn)
{
	die('could not connect:');
}
$purchaser_id=$_POST['purchaser_id'];
$a="select purchaser_id from cart_details where purchaser_id='".$purchaser_id."' limit 1";
$b=mysqli_query($conn,$a);
if($purchaser_id==null)
{
	echo "<h2 align='center'>no value entered";
	echo "<br><br>";
	echo "<a href='index.html'>go back</a></h2>";
	exit();
}
else
{
	if(mysqli_num_rows($b)==1)
	{
		
      $sql="select  * from cart_details where purchaser_id='$purchaser_id'";
#dbh=mysqli_select_db('online shopping');
      $result=$conn->query($sql);
	}
	else
	{
		echo "<h2 align='center'>purchaserid doesn't exist";
		echo"<br><br>";
		echo "<a href='index.html'>go back</a></h2>";
		exit();
	}
}

if(!$result)
{
	die('could not get data:');
}
	echo "<h2 align='center'>Fetched data Successfully\n</h2>";
	echo "<table border size=1 align='center'>";
echo "<tr><th>purchaser_id</th><th>product_name</th><th>amount</th></tr>";



	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>
	                  <td>{$row['purchaser_id']}</td>
                          <td>{$row['product_name']}</td>
						  <td>{$row['amount']}</td>
	</tr>\n";

	}
	echo "</table>";
	echo "<h2 align='center'><a href='index.html'>go back</a></h2>";
	mysqli_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">purchaser_id</td>
   <td><input name="purchaser_id" type="text" id="purchaser_id"</td>
   </tr>
   <tr>
  <td width="100"></td>
  <td></td>
  </tr>
  <td width="100"></td>
  <td>
  <input name="retrieve" type="submit" id="retrieve" value="RETRIEVE">
  </td>
  </tr>
  </table>
  </form>
<?php 
}
   
?> 
<br>
  
</body>
</html>