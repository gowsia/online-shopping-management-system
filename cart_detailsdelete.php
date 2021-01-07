<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error());
    


     
          $del=$_REQUEST['product_name'];
		  
    $query1 = mysqli_query($dbh,"delete from cart_details where product_name='$del'");
    
    



echo"data deleted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM cart_details");

 echo"<table border size=1>";
 echo"<tr> <th>purchaser_id</th> <th>product_name</th>  <th>amount</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td>  </tr>";
 } 
 echo"</table>";
?>
<a href="cartindex.html"><font size=5>go back</font></a><br><br>
</html>