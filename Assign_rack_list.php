<?php ob_start(); include('head.php');?>
<?php include('header.php');?>
  
   
        <!-- Page wrapper  -->
        <div >
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
<a href="Assign_rack.php"><button class="btn btn-primary">Assign Rack </button></a> 
<br>
<br><br>
<table class="table table-bordered">
    <tr>
      <th>Rack No</th>
      <th>Service</th>
      <th>Status</th>
      <th>Action</th>

    </tr>
    <?php
    

    $sql = "SELECT * FROM assign_rack";
     $result = $conn->query($sql);
      $tot=0;
     while($row = mysqli_fetch_array($result)) { 
         $service = mysqli_query($conn,"SELECT * FROM `wishlist_order` WHERE id='$row[2]'");
            $r = mysqli_fetch_array($service);

     echo  "<tr>
     
      

      
         
          <td>$row[1]</td>


          <td>$r[2]</td>


          <td>$row[3]</td>
          <td>
          <a href='Assign_rack_list.php?action=delete&id=$row[0]' class='btn btn-danger'>Delete</a>
          </td>
          <td>
            <a href='enable1.php?id=$row[0]' class='btn btn-success'>Enable</a>
            <a href='disable1.php?id=$row[0]' class='btn btn-danger'>Disable</a>
          </td>
      </tr>";
     
     }
    ?>
    
   
</table>
</div>
</div>
</div>
</div>
</div>

<?php
if (isset($_GET['action']) && $_GET['action'] == "delete") {
    $id = $_GET['id'];
    mysqli_query($conn,"DELETE FROM `assign_rack` WHERE id='$id'");
    header("location:Assign_rack_list.php");
}
?>
                     
        </div>
            <!-- End Container fluid  -->
            <?php ob_flush(); include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->