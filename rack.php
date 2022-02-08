<?php include('head.php');?>
<?php include('header.php');?>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
        <!-- Page wrapper  -->
        <div >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Rack</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Rack </li>
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

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">





<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Rack No.</label>
<div class="col-sm-9">

<input type="text"  class="form-control" placeholder="Rack Number" name="rack_no" id="">
</div>
</div>
</div>




</div>
</div>






<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
<br>
<a href="rack_list.php">View All Racks</a>
</div>
</div>
</div>
</div>

<?php

if(isset($_POST["btn_save"])){


    $name=$_POST["rack_no"];

  $a= mysqli_query($conn,"insert into rack values(null,'$name','False')");

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


