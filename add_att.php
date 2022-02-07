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
<h3 class="text-primary">Attendance</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Attendance Management</li>
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
<form class="form-horizontal" method="POST" action="pages/save_att.php" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $current_date;?>">
<?php 
    $cin = "SELECT * FROM `attendance` where e_id=".$_SESSION["id"]." and cin like '".$current_date."%'  ";
    $cout = "SELECT * FROM `attendance` where e_id=".$_SESSION["id"]." and cout like '".$current_date."%'  ";
    $result = $conn->query($cin);
    $row=mysqli_fetch_row($result);
    $result2 = $conn->query($cout);
    $row2=mysqli_fetch_row($result2);
?>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">User Name</label>
<div class="col-sm-9">
<input type="text" readonly value="<?php echo $_SESSION["fname"]?>" class="form-control">
<input type="hidden" name='e_id' readonly value="<?php echo $_SESSION["id"]?>" class="form-control">
</div>
</div>
</div>


<?php 
if($row == '')
{
?>
    <input type="hidden" value="cin" name="type">
    <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Punch In</button>
    <button type="button" disabled name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Punch Out</button>
<?php    
}
else if($row != '' && $row2 == '')
{
?>
    <input type="hidden" value="cout" name="type">
    <input type="hidden" value="<?php echo $row[0] ?>" name="id">
    <button type="button" disabled name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Punch In</button>
    <button type="submit"  name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Punch Out</button>
<?php    
}
else
{
    ?>
    <button type="button" disabled name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Punch In</button>
    <button type="button" disabled name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Punch Out</button>
<?php 
}
?>

</form>
</div>
</div>
</div>
</div>

</div>




<?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

