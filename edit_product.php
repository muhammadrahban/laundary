
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

if(isset($_POST["btn_update"]))
{
extract($_POST);
/*$image = $_FILES['image']['name'];
$target = "uploadImage/Profile/".basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
@unlink("uploadImage/Profile/".$_POST['old_image']);
$msg = "Image uploaded successfully";
}else{
$msg = "Failed to upload image";
}*/

 $q1="UPDATE `products` SET `name`='$name',overlay='$overlay',cat_id='$cat_id',b_id='$b_id',Cost='$cost' WHERE `Id`='".$_GET['id']."'"; 
//$q2=$conn->query($q1);

if ($conn->query($q1) === TRUE) {

    include("Activity.php");
        session_start(); 
        $pc=gethostname();
        $u= $_SESSION["username"];
        $idd=$_SESSION["role"];
        $ro=mysqli_query($conn,"select * from  tbl_group where id='$idd'");
        $rooo=mysqli_fetch_array($ro);
        date_default_timezone_set('Asia/Karachi');
        $da= date('l jS \of F Y h:i:s A');
        $apple = new Act('Edit Product ',$u,$rooo[1],$pc,$da);
        $apple->actt();
      

$_SESSION['success']=' Record Successfully Updated';
?>
<script type="text/javascript">
window.location="view_product.php";
</script>
<?php
} else {
$_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="view_product.php";
</script>
<?php
}
}

?>

<?php
$que="select * from products where id='".$_GET["id"]."'";
// echo $que;
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
extract($row);
$name = $row['name'];
$overlay = $row['overlay'];
$Cost = $row['Cost'];
$cat_id = $row['cat_id'];
$b_id = $row['b_id'];
;

}

?> 





<!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Product Management</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Edit Product</li>
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


<form class="form-horizontal" method="POST" enctype="multipart/form-data" name="userform">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Product Name</label>
<div class="col-sm-9">
<input type="text" name="name" class="form-control" placeholder="Product Name" id="event" value="<?php echo $name; ?>"  required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Overlay</label>
<div class="col-sm-9">
<input type="text" name="overlay" class="form-control" placeholder="Overlay" id="event" value="<?php echo $overlay; ?>"  onkeydown="return isNumber(event);" required="">
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
  <option <?php echo ($cat_id == $row2['Id']) ? 'selected' : '' ?> value ="<?php echo $row2['Id'];?>"><?php echo $row2['Name'];?> </option>
  <?php } ?>
  </select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Brand Name</label>
<div class="col-sm-9">
<select name="cat_id" id="event" class="form-control" required="">

  <option value=" ">--Select Brand--</option>
  <?php  
  $sql2 = "SELECT * FROM brand";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option <?php echo ($b_id == $row2['id']) ? 'selected' : '' ?> value ="<?php echo $row2['id'];?>"><?php echo $row2['b_name'];?> </option>
  <?php } ?>
  </select>
</div>
</div>
</div>



<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Cost</label>
<div class="col-sm-9">
<input type="text" name="cost" value="<?php echo $Cost; ?>"  class="form-control" placeholder="Cost" id="event" onkeydown="return isNumber(event);" required="">
</div>
</div>
</div>


<button type="submit" name="btn_update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>

</div>


<!-- /# row -->

<!-- End PAge Content -->


<?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

