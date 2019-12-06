<!doctype html>
<html>

<head>
<link rel="stylesheet" href="styleI.css?v=<?php echo time()?>">
</head>

<style>
/**{margin:0px; padding:0px;}
#main{border:1px solid black; width:450px; height:500px; margin:24px auto;}
#message_area{width:98%; border:1px solid blue; height:440px;}*/
</style>
<body>
<?php session_start();
   if(isset($_SESSION['user_name'])){

// echo '<h2 align="center">Welcome </h2> '.$_SESSION['user_name'];
// echo '<a href="logout.php">Log out</a>';

}else{

	header("location:chat.php");
}


?>
<div id="main">
<h2 align="center">Welcome To The Chat Screen!!!</h2>
<!-- <h3 align="center" color: white><?php?></h3> -->
<h4 align="center" color: white><a href="Login.php">Take A Break</a> </h4>	
<div id="message_area"> 
<?php include("connection.php");

  $ql="SELECT * FROM `message`" ;
  $rl= mysqli_query($con, $ql) ;
  while($row = mysqli_fetch_assoc($rl)){
  	$message = $row['message'] ;
  	$user_name = $row['user_name'];
  	echo '<h4 style=color:"red">'.$user_name.'</h4>' ;
  	echo '<p style=color:"blue">'.$message.'</p>' ; 
  
  }


if(isset($_POST['submit'])){
	$message = $_POST['message'] ;
	$q='INSERT INTO `message` (`id`, `message`, `user_name`) VALUES("", "'.$message.'", "'.$_SESSION['user_name'].'")';
	
	if(mysqli_query($con, $q)){
		echo '<h4 style="color:red">'.$_SESSION['user_name'].'</h4>' ;
		echo '<p>'.$message.'</p> ';
	}
}

?>
</div>
<form method="post">
<input type="text" name="message" style="width:370px; height:50px;"placeholder= "Type your Message"	/>
<input type="submit"  name="submit" style="width:70px; height:50px;" value="message" />
</div>	
</body>
</html>