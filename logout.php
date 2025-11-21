<?php
session_destroy();
header("location: index.php");
?>




<div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT user.* FROM `user` WHERE user.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)