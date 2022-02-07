<?php
 include('connect.php');
 $id=$_GET['id'];
$a=mysqli_query($conn,"select * from wish_list where id=$id");

$b=mysqli_fetch_array($a);
$q=$b[1]+1;
$m=$q*$b[2];
mysqli_query($conn,"update wish_list set quantity=$q ,amount=$m where id=$b[0]");

header("location:wishlist.php");
?>