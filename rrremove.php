<?php
 include('connect.php');
 //$id=$_GET['id'];
$a=mysqli_query($conn,"truncate table wish_list");

header("location:wishlist.php");
?>