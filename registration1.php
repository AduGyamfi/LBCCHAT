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
               header("location:login.php");
            } else {
            	echo $q ;
            }

      	}else{
      		echo "please fill all the boxes";
      	}
      }

?>