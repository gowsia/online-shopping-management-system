<html>
<body>
<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error());
    

	$product_name = $_REQUEST["product_name"];
        $product_id= $_REQUEST["product_id"];  
	$price = $_REQUEST["price"];   
     

    $query = "update product_details set product_name='$product_name',product_id='$product_id',price='$price' where product_id='$product_id'";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    



echo"data updated successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM product_details");

 echo"<table border size=1>";
 echo"<tr> <th>product_name</th> <th>product_id</th> <th>price</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="products.html"<click here to delete</a><br><br>
<a href="productindex.html"><font size=5>go back</font></a><br><br>
</body>
</html>