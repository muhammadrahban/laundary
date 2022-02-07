<?php
 include('connect.php');
 $id=$_GET['id'];
$a=mysqli_query($conn,"delete from wish_list where id=$id");

header("location:wishlist.php");
?>