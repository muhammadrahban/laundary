<?php ob_start(); include('head.php');?>
<?php include('header.php');?>

<?php include('sidebar.php');?>   
   
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">View Rack</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Rack</li>
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

<h1 class="text-center">View All Rack</h1>
<br>

<br>
<a href="rack.php"><button class="btn btn-primary">Create Rack</button></a> 
<br>
<br><br>
<?php if(isset($_GET['rack_id'])){
       $id = $_GET['rack_id'];
       $sql = mysqli_query($conn,"select * from rack where id='$id'");
       $fetch = mysqli_fetch_array($sql);
       ?>
       <h2>Update Record</h2>
        <form action="crud.php" method="post">
            <input type="hidden" name="id" value="<?php echo $fetch[0] ?>">

            <input type="text" name="rack" value="<?php echo $fetch[1] ?>" class="form-control">
            <br>

            <input type="text" name="status" value="<?php echo $fetch[2] ?>" class="form-control">
            <br>

            <input type="submit" value="Update" name="rack_btn" class="btn btn-info">
        </form>
        <br>
   <?php }?>
<table class="table table-bordered">
    <tr>
      <th>Rack No</th>
      <th>Status</th>
      <th>Action</th>
      <th></th>

    </tr>
    <?php
    

    $sql = "SELECT * FROM rack";
     $result = $conn->query($sql);
      $tot=0;
     while($row = mysqli_fetch_array($result)) { 
     
     echo  "<tr>
     
      

      
         
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>
            <a href='rack_list.php?rack_id=$row[0]' class='btn btn-success'>Edit</a>
            <a href='rack_list.php?id=$row[0]' class='btn btn-danger'>Delete</a>
          </td>
          <td>
            <a href='enable.php?id=$row[0]' class='btn btn-success'>Enable</a>
            <a href='disable.php?id=$row[0]' class='btn btn-danger'>Disable</a>
          </td>
      </tr>
      
      <tr>
      
      </tr>";
     
     }
    ?>
    
  
</table>
<br>

</div>
</div>
</div>
</div>
</div>


                     
        </div>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
           $sql = mysqli_query($conn,"delete from rack where id='$id'");
           if ($sql) {
               header("location:rack_list.php");
           }
        }
        ?>
            <!-- End Container fluid  -->
            <?php ob_flush(); include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->