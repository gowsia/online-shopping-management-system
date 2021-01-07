<html>
<body>
<?php
 $dbh = mysqli_connect("localhost", "root", "","") or die(mysqli_error());
 mysqli_select_db($dbh,'online shopping') or die(mysqli_error());
    

	$purchaser_name = $_REQUEST["purchaser_name"];
        $purchaser_id= $_REQUEST["purchaser_id"];  
	$password = $_REQUEST["password"];   
	$mobile_no = $_REQUEST["mobile_no"];  
	$address = $_REQUEST["address"];
     

    $query = "update create_account set purchaser_name='$purchaser_name',purchaser_id='$purchaser_id',password='$password',mobile_no='$mobile_no',address='$address' where purchaser_id='$purchaser_id'";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    



echo"data updated successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM create_account");

 echo"<table border size=1>";
 echo"<tr> <th>purchaser_name</th> <th>purchaser_id</th> <th>password</th> <th>mobile_no</th> <th>address</th></tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="user.html"<click here to delete</a><br><br>
<a href="creationindex.html"><font size=5>go back</font></a><br><br>
</body>
</html>