<?php
    include('../connect.php');

    $id = $_GET['id'];
    $q1="UPDATE `sale` SET `status`='Approved' WHERE `id`='".$id."'"; 
    $conn->query($q1);

    $q4="select * from sale_details WHERE s_id = '".$id."'";
    $query4=$conn->query($q4);
    $quantity = 0;
    $qty = 0;
    
    while ($row = $query4->fetch_assoc()) {
        $p_id = $row['p_id'];
        $q2="select * from tbl_stock WHERE `p_id`='".$p_id."'"; 
        $query2=$conn->query($q2);
        $row2=mysqli_fetch_row($query2);
        $qty = $row['qty'];
        $quantity = $row2[3];
        $quantity= $quantity - $qty;
        $q3="UPDATE `tbl_stock` SET `qtn`='".$quantity."' WHERE `p_id`='".$p_id."'"; 
        $conn->query($q3);
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
    $apple = new Act('Sale Approved ',$u,$rooo[1],$pc,$da);
    $apple->actt();
  

  $_SESSION['success']=' Record Successfully Added';
    ?>
    <script type="text/javascript">
    window.location="../view_sale.php";
    </script>