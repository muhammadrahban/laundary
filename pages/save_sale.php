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

    if(!isset($p_id) || $total == 'NaN')
    {
        $_SESSION['error']='Something Went Wrong';
        ?>
        <script type="text/javascript">
        window.location="../add_sale.php";
        </script>
        <?php 
    } 
    else
    {
        $id = 0;
        $sql="INSERT INTO `sale`(`date`,`fname`,`lname`,`total`) VALUES ('$date','$fname','$lname','$total')";
    }


if ($conn->query($sql) === TRUE)
{
    $q2="select max(id) as id from sale"; 
    $query2=$conn->query($q2);
    $row = mysqli_fetch_assoc($query2); 
    $id = $row['id'];
    for ($i=0; $i < count($p_id) ; $i++) { 
        $sql2 = "INSERT INTO `sale_details`(`s_id`,`p_id`,`qty`,`price`,`sub_total`) VALUES ('$id','$p_id[$i]','$quantity[$i]','$price[$i]','$sub_total[$i]')";
        $conn->query($sql2);
    }

    include("../Activity.php");
        session_start(); 
        $pc=gethostname();
        $u= $_SESSION["username"];
        $idd=$_SESSION["role"];
        $ro=mysqli_query($conn,"select * from  tbl_group where id='$idd'");
        $rooo=mysqli_fetch_array($ro);
        date_default_timezone_set('Asia/Karachi');
        $da= date('l jS \of F Y h:i:s A');
        $apple = new Act('New Sale Added ',$u,$rooo[1],$pc,$da);
        $apple->actt();
      

      $_SESSION['success']=' Record Successfully Added';
     ?>
    <script type="text/javascript">
    window.location="../view_sale.php";
    </script>
    <?php
} 
else 
{
      $_SESSION['error']='Something Went Wrong';
    ?>
    <script type="text/javascript">
    window.location="../view_sale.php";
    </script>
    <?php 
} ?>