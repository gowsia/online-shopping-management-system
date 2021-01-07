<html>
<body>
<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error());
    


    $product_name= $_REQUEST["product_name"];    
	$total= $_REQUEST["total"];  
     

    $query = "update cart_details set product_name='$product_name',total='$total' where product_name='$product_name'";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    



echo"data updated successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM cart_details");

 echo"<table border size=1>";
 echo"<tr>  <th>product_name</th>  <th>total</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="cart_details.html"<click here to delete</a><br><br>
<a href="cartindex.html"><font size=5>go back</font></a><br><br>
</body>
</html>