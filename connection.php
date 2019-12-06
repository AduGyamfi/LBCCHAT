<?php

$con=mysqli_connect("localhost", "root", "", "chat application");
if($con)
{
  $st=$con->prepare("select * from user where user_name=?");
     $st->bind_param("s",$_GET["user_name"]);
    $st->execute();
       $rs=$st->get_result();
        $row=$rs->fetch_assoc();
        echo $row["first_name"];
      }
       else{
       	echo "connection failed";
       }
?>