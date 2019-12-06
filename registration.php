<!doctype html>
<html>

<head>
<link rel="stylesheet" href="styleR.css">	
<style>
/**{margin:0px; padding: 0px;}
#main{border:1px solid black; width:400px; margin:24px auto;}*/
</style>
</head>

<body>
<?php
       require_once("connection.php");


      if(isset($_POST['register'])){
      	$first_name= $_POST['first_name'];
      	$last_name= $_POST['last_name'];
      	$user_name= $_POST['user_name'];
      	$password= $_POST['password'];

      	if($first_name !="" and $last_name != "" and $user_name !="" and $password !=""){
      		$q= "INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_name`, `password`) VALUES ('', '".$first_name."', '".$last_name."', '".$user_name."', '".$password."')";
            if(mysqli_query($con, $q)){
               header("location:chat.php");
            } else {
            	echo $q ;
            }

      	}else{
      		echo "please fill all the boxes";
      	}
      }

?>
<!-- <section> -->
<div  id= "main" align="center">

<h2 align="center">Register here!!!</h2>
<form method="post" >
<!-- <image class="great" src="img/great.jpg" alt="great"> -->	

<!-- <image  src="img/great.jpg" alt="great" height=50px width=400px> -->
First Name:<br>
<input type="text" name="first_name" placeholder="First Name" />
<br><br>
Last Name:<br>
<input type="text" name="last_name" placeholder="last_name" /><br><br>
User Name:<br>
<input type="text" name="user_name" placeholder="user name" /><br><br>
Password:<br>
<input type="password" name="password" placeholder="password" /><br><br>
<input type="submit" name="register" value="Register">
<a href="login.php">I already have an account </a>
</form>
</div>
<!-- </section> -->

</body>
</html>