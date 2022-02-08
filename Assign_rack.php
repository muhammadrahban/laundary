<?php ob_start(); include('head.php');?>
<?php include('header.php');?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
        <!-- Page wrapper  -->
        <div >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Blank</h3> </div>
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
<div class="col-md-6">
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


<select name="rack_id" id="group_id" class="form-control" required="">
                   <option value=" ">--Select Rack--</option>
                                      <?php  
                          $sql2 = "SELECT * FROM rack ";
                          $result2 = $conn->query($sql2); 
                          while($row2= mysqli_fetch_array($result2)){
                        ?>
                        <option value ="<?php echo $row2[0];?>"><?php echo $row2[1];?> </option>
                      <?php } ?>
                                                   </select>

</div>

</div>


 </div> 



 <div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Order No.</label>
<div class="col-sm-9">


<select name="order_id" class="form-control" required="">
                   <option value=" ">--Select Order--</option>
                                      <?php  
                        //   $sql = "SELECT * FROM order";
                        //   $result = $conn->query($sql); 
                          $ink = mysqli_query($conn,"SELECT * FROM `wishlist_order` order by id desc");
                          while($walk= mysqli_fetch_assoc($ink)){
                        ?>
                        <option value ="<?php echo $walk['id'];?>"><?php echo $walk['invoice'];?> </option>
                      <?php } ?>
                                                   </select>

</div>

</div>


 </div> 









<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
<br>
<a href="Assign_rack_list.php">View All Assign Racks</a>
</div>
</div>
</div>
</div>

<div class="col-md-3" >
<h2>Rack no</h2>
  <br>
               <div class="row">
               <?php
            $sql = mysqli_query($conn,"SELECT * FROM `rack`");
            while($row = mysqli_fetch_assoc($sql)){
              $s = mysqli_query($conn,"SELECT * FROM `assign_rack` WHERE rack_id='$row[id]'");
              $fetch = mysqli_fetch_assoc($s);
             
              ?>
                 <div style="border: 0.5px solid grey;" class="col-md-2">
                <p style="color: <?php if($row['id'] == $fetch['rack_id']){ echo 'red'; } ?>"><span class="fa fa-edit"></span><?php echo $row['rack_no'] ?></p>
                 </div>
                 <?php }?>
               </div>
               

             
               

</div>








                          </div>

                          </div>            
        </div>

        <?php

if(isset($_POST["btn_save"])){


    $rackid=$_POST["rack_id"];
    $orderid=$_POST["order_id"];

  $rack_id = mysqli_query($conn,"SELECT * FROM `assign_rack` WHERE rack_id='$rackid' OR order_id='$orderid'");
  $check = mysqli_num_rows($rack_id);

  if($check == 1){
    echo "<script>alert('This Rack is Already Assign');</script>";
  }
  else {
    

  $a= mysqli_query($conn,"insert into assign_rack values(null,'$rackid','$orderid','True')");

  if ($a)
  {
      
   echo '<script>swal("Good job!", "Data inserted successfully!", "success");</script>';
   header("location:Assign_rack.php");
 } 
 else{
    echo '<script>swal("Error!", "Data not inserted!", "error")</script>';
    header("location:Assign_rack.php");
 }

  }


}
?>

            <!-- End Container fluid  -->
            <?php ob_flush(); include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->




      

