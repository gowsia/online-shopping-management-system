<html>

<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error());
    


     
          $del=$_REQUEST['purchaser_id'];
    $query1 = mysqli_query($dbh,"delete from create_account where purchaser_id='$del'");
    
    



echo"data deleted successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM create_account");

 echo"<table border size=1>";
 echo"<tr> <th>purchaser_name</th> <th>purchaser_id</th> <th>password</th> <th>mobile_no</th> <th>address</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="creationindex.html"><font size=5>go back</font></a><br><br>
</html>