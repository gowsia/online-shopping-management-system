<?php
$dbh=mysqli_connect("localhost","root","",'online shopping');
 if(isset($_POST['purchaser_id'])){
	 $purchaser_id=$_POST['purchaser_id'];
	 $password=$_POST['password'];
	 $sql="select *from create_account where purchaser_id='".$purchaser_id."'and password='".$password."' limit 1";
	 $result=mysqli_query($dbh,$sql);
	 if(mysqli_num_rows($result)==1)
	 {
		 echo"<body bgcolor='lime'>";
		 echo "<br><br><br><font color='blue'><h2 align='center'>SUCCESSFULL LOGIN !!!!";
		 echo "<br><br>";
		  echo "<a href='customerindex.html'>CLICK HERE TO VIEW DETAILS</a></h2></font>";
 
		 exit();
	 }
	 else
	 {
		 echo "<h2 align='center'>INVALID LOGIN"; 
		 echo "<br><br>";
		 echo "<a href = 'purchaser_login.php'> CLICK HERE TO GO BACK</a><h2></body>";
		 exit();
	 }
 }
 ?>
 


<html>
<style>
  
input[type=text], input[type=password] {
    width:25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:25%;
}

button:hover {
    opacity: 0.8;
}

.btn-login {
    width: auto;
    padding: 10px 18px;
    background-color: #4CAF50;
}
.btn-login {
       width:25%;

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius:25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 8px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .btn-login {
       width: 25%;
    }
}
</style>
<body>
<center>
<img src="user.jpg">
</center>
<h2 align="center">ONLINE SHOPPING DATABASE</h2>

<form  method="POST" action="#">
  <div class="imgcontainer" align="center">
 
  </div>

  <div class="container" align="center">
    <label><b>ID</b></label>
    <input type="number" placeholder="Enter your id" name="purchaser_id" required>
<br><br>
    <label><b>password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>
	
        
   
	<br>
   
  </div>
<br>
  <div class="container" style="background-color:"crimson" align="center">
    <a href="index.html" align="center">
     <input type="submit" name="submit" value="LOGIN"  align="center" class="btn-login"/>
    
  </div>
</form>

</body>
</html>
