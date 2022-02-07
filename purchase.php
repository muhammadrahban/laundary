<?php include('head.php');?>
<?php include('header.php');?>

<?php include('sidebar.php');?>   
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Purchase</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Purchase </li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
        
                        





                <div class="row">
<div class="col-lg-8" style="    margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div class="card-body">
<div class="input-states">
<form class="form-horizontal" method="POST" action="" name="userform" enctype="multipart/form-data">

<!-- <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>"> -->





<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Product Name.</label>
<div class="col-sm-9">

<input type="text"  class="form-control" placeholder="Product Name" name="Product_Name" id="">
</div>
</div>
</div>



<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Per price.</label>
<div class="col-sm-9">

<input type="text"  class="form-control" placeholder="Per price" name="per_price" id="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Quantity.</label>
<div class="col-sm-9">

<input type="number"  min="1"  class="form-control" placeholder="Quantity" name="qtn" id="">
</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Brand Name.</label>
<div class="col-sm-9">

<input type="text"  class="form-control" placeholder="Brand Name" name="brand" id="">
</div>
</div>
</div>



<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">category Name.</label>
<div class="col-sm-9">

<input type="text"  class="form-control" placeholder="category Name" name="cat" id="">
</div>
</div>
</div>



</div>
</div>






<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
<br>
<a href="view_purchase.php">View All Purchase products</a>
</div>
</div>
</div>
</div>

<?php

if(isset($_POST["btn_save"])){


    $name=$_POST["Product_Name"];
    $price=$_POST["per_price"];
    $qtn=$_POST["qtn"];
    $brand=$_POST["brand"];
    $cat=$_POST["cat"];
    $s_qtn=$qtn;
    $s_name=$name;

  $a= mysqli_query($conn,"INSERT INTO `tbl_purchase` VALUES (null,'$name','$price','$qtn','$brand','$cat')");

  $s=mysqli_query($conn,"SELECT * FROM `tbl_stock` WHERE p_name='$s_name'");

  $ar=mysqli_fetch_assoc($s);

  $saa=mysqli_num_rows($s);

//   var_dump($saa);

  
  
      if($saa > 0 || $ar['p_name'] == $s_name){
        $arrid = $ar['id'];

       $t= $ar['qtn'] += $qtn;
         mysqli_query($conn,"update tbl_stock set qtn='$t' where id='$arrid'");
      
        }
        else{
        mysqli_query($conn,"insert into tbl_stock (`p_name`, `per_price`, `qtn`, `category`, `brand`) values('$name','$price','$qtn','$cat','$brand')");
        }
    
  
  if ($a)
  {
      
  echo '<script>swal("Good job!", "Data inserted successfully!", "success");</script>';
 } 
 else{
  echo '<script>swal("Error!", "Data not inserted!", "error")</script>';
 }


}
?>
               
        </div>
            <!-- End Container fluid  -->
            <?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->


