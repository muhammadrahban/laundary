<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('../connect.php');
/*$passw = hash('sha256', $_POST['password']);*/
//$passw = hash('sha256',$p);
//echo $passw;exit;
// function createSalt()
// {
//     return '2123293dsj2hu2nikhiljdsd';
// }
// $salt = createSalt();
/*$pass = hash('sha256', $salt . $passw);
*/
/*$image = $_FILES['image']['name'];*/
/*$target = "../uploadImage/Profile/".basename($image);*/

/*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {*/
 // @unlink("uploadImage/Profile/".$_POST['old_image']);
    /*  $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }*/
extract($_POST);

$q3="select * from products WHERE `id`='".$p_id."'"; 
$query3=$conn->query($q3);
while($row3=mysqli_fetch_array($query3))
{
    extract($row3);
    $p_name = $row3['name'];
    $b_id = $row3['b_id'];
    $c_id = $row3['cat_id'];
}


$q1="select * from brand WHERE `id`='".$b_id."'"; 
$query=$conn->query($q1);
while($row=mysqli_fetch_array($query))
{
    extract($row);
    $brand = $row['b_name'];
}
$q2="select * from category WHERE `Id`='".$c_id."'"; 
$query2=$conn->query($q2);
while($row2=mysqli_fetch_array($query2))
{
    extract($row2);
    $category = $row2['Name'];
}

$q4="select * from tbl_stock WHERE `p_id`='".$p_id."' and b_id='".$b_id."' and c_id='".$c_id."'"; 
$query4=$conn->query($q4);
$row4=mysqli_fetch_row($query4);
$quantity = 0;
$qty = 0;
if($row4 != '')
{
    extract($row4);
    $qty = $row4[3];
    $quantity = $qty + $qtn;

    $sql="UPDATE `tbl_stock` SET `qtn`='$quantity',`per_price`='$per_price',`price_express`='$price_express'  WHERE `p_id`='".$p_id."' and b_id='".$b_id."' and c_id='".$c_id."'"; 

}
else
{
    $sql="INSERT INTO `tbl_stock`(`p_name`,`per_price`,`qtn`,`category`,`brand`,`price_express`,`b_id`,`c_id`,`p_id`) VALUES ('$p_name','$per_price','$qtn','$category','$brand','$price_express','$b_id','$c_id','$p_id')";
}

if ($conn->query($sql) === TRUE)
{
    include("../Activity.php");
        session_start(); 
        $pc=gethostname();
        $u= $_SESSION["username"];
        $idd=$_SESSION["role"];
        $ro=mysqli_query($conn,"select * from  tbl_group where id='$idd'");
        $rooo=mysqli_fetch_array($ro);
        date_default_timezone_set('Asia/Karachi');
        $da= date('l jS \of F Y h:i:s A');
        $apple = new Act('New Stock Added ',$u,$rooo[1],$pc,$da);
        $apple->actt();
      

      $_SESSION['success']=' Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="../view_stock.php";
</script>
<?php
} else 
{
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="../view_stock.php";
</script>
<?php } ?>