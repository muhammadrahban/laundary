<?php include('head.php');?>

<?php include('header.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

?>





<!-- Page wrapper  -->
<div >
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Product</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Product Management</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->

<!-- /# row -->
<div class="row">
<div class="col-lg-8" style="    margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div class="card-body">
<div class="input-states">
<form class="form-horizontal" method="POST" action="pages/save_product.php" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $current_date;?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Product Name</label>
<div class="col-sm-9">
<input type="text" name="name" class="form-control" placeholder="Product Name" id="event"  required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Overlay</label>
<div class="col-sm-9">
<input type="text" name="overlay" class="form-control" placeholder="Overlay" id="event" onkeydown="return isNumber(event);" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Category Name</label>
<div class="col-sm-9">
<select name="cat_id" id="event" class="form-control" required="">

  <option value=" ">--Select Category--</option>
  <?php  
  $sql2 = "SELECT * FROM category";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['Id'];?>"><?php echo $row2['Name'];?> </option>
  <?php } ?>
  </select>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Brand Name</label>
<div class="col-sm-9">
<select name="b_id" id="event" class="form-control" required="">

  <option value=" ">--Select Brand--</option>
  <?php  
  $sql2 = "SELECT * FROM brand";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['id'];?>"><?php echo $row2['b_name'];?> </option>
  <?php } ?>
  </select>
</div>
</div>
</div>



<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Cost</label>
<div class="col-sm-9">
<input type="text" name="cost" class="form-control" placeholder="Cost" id="event" onkeydown="return isNumber(event);" required="">
</div>
</div>
</div>



<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>

</div>




<?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

