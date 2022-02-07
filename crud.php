<?php
include 'connect.php';
ob_start();

//Rack update
if (isset($_POST['rack_btn'])) {
   $rack_id = $_POST['id'];
   $rack = $_POST['rack'];
   $status = $_POST['status'];

   $sql = mysqli_query($conn,"UPDATE `rack` SET `rack_no`='$rack',`rack_status`='$status' WHERE id='$rack_id'");
   
   if ($sql) {
       header("location:rack_list.php");
   }
}


//Customer Delete
if (isset($_POST['customer_delete'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($conn,"DELETE FROM `customers` WHERE id='$id'");
    if ($sql) {
        header("location:view_customer.php");
    }
}


//Purchase Record Update
if (isset($_POST['purchase_edit'])) {
   $sql = mysqli_query($conn,"UPDATE `tbl_purchase` SET `p_name`='$_POST[name]',`per_price`='$_POST[price]',`qtn`='$_POST[qty]',`brand`='$_POST[brand]',`category`='$_POST[category]' WHERE id='$_POST[id]'");
   if ($sql) {
    header("location:view_purchase.php");
}
}

ob_flush();
?>