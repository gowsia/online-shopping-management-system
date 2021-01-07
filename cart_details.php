<html>
<body>
<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error());
    
    $purchaser_id= $_REQUEST["purchaser_id"];
    $product_name= $_REQUEST["product_name"];   
	$amount= $_REQUEST["amount"];  
     

    $query = "insert into cart_details values ('$purchaser_id','$product_name','$amount')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    



echo"data inserted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM cart_details");

 echo"<table border size=1>";
 echo"<tr><th>purchaser_id</th> <th>product_name</th>  <th>amount</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0] </td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
 } 
 echo"</table>";
 $db_host="localhost";
 $db_name="online shopping";
 $db_user="root";
 $db_pass="";
 $conn = mysqli_connect("$db_host","$db_user","$db_pass") or die("couldn't connect");
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error($dbh));
 $p0=mysqli_query($dbh,"call average(@out);");
 $rs=mysqli_query($dbh,'select @out');
 while($row=mysqli_fetch_row($rs))
 {
	 echo 'avg=586'.$row[0];
 }
 mysqli_close($conn);
?>
<a href="cart_details.html"<click here to delete</a><br><br>
<a href="cartindex.html"><font size=5>go back</font></a><br><br>
</body>
</html>