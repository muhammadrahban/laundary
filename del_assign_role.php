<?php
include 'connect.php';
session_start();

$sql = "DELETE FROM tbl_group WHERE id='".$_GET["id"]."'";
$res = $conn->query($sql) ;

include("Activity.php");
session_start(); 
$pc=gethostname();
$u= $_SESSION["username"];
$idd=$_SESSION["role"];
$ro=mysqli_query($conn,"select * from  tbl_group where id='$idd'");
$rooo=mysqli_fetch_array($ro);
date_default_timezone_set('Asia/Karachi');
$da= date('l jS \of F Y h:i:s A');
$apple = new Act('Delete Role ',$u,$rooo[1],$pc,$da);
$apple->actt();

 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_role.php";
</script>

