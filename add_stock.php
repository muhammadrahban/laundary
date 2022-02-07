<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

?>





<!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Stock</h3> </div>
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
<form class="form-horizontal" method="POST" action="pages/save_stock.php" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Product Name</label>
<div class="col-sm-9">
<select name="p_id" id="event" class="form-control" required="">

  <option value=" ">--Select Product--</option>
  <?php  
  $sql2 = "SELECT * FROM products";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['id'];?>"><?php echo $row2['name'];?> </option>
  <?php } ?>
  </select>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Price</label>
<div class="col-sm-9">
<input type="text" name="per_price" class="form-control" placeholder="Price" id="event" onkeydown="return isNumber(event);" required="">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Quantity</label>
<div class="col-sm-9">
<input type="text" name="qtn" class="form-control" placeholder="Quantity" id="event" onkeydown="return isNumber(event);" required="">
</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Price Exp</label>
<div class="col-sm-9">
<input type="text" name="price_express" class="form-control" placeholder="Price Exp" id="event" onkeydown="return isNumber(event);" required="">
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

