<?php  include('head.php');?>
<?php include('header.php');?>
   
        <!-- Page wrapper  -->
        <div >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Stock</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">stock</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
        
                <div class="table-responsive m-t-40">
   <table id="myTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Price Express</th>
                        <th>Pieces Available</th>
                        <th>Section Name</th>
                    <th>Action</th>
                    
                    
              
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    include 'connect.php';

                $sql = "SELECT * FROM tbl_stock";

             $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
                                      ?>
                  <tr>
                  <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['p_name'] ?></td>
                        <td><?php echo $row['per_price'] ?></td>
                        <td><?php echo $row['price_express'] ?></td>
                        <td><?php echo $row['qtn'] ?></td>
                        
                        <td><?php echo $row['category'] ?></td>
    

     <td>

     <a href="sale.php?name=<?=$row['p_name'];?>"><button type="button" class="btn btn-xs btn-success" >Sale</button></a>
                                             
     <?php if(isset($useroles)){  if(in_array("add_stock",$useroles)){ ?> 
           <a href="edit_stock.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              <?php } } ?>        

  <?php if(isset($useroles)){  if(in_array("delete_stock",$useroles)){ ?> 
<a href="view_stock.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
               <?php } } ?> 
  
</td>
</tr>
<?php } ?>
                   
                   
                                     



                                        </tbody>
</table>
                     
</div>
        </div>
            <!-- End Container fluid  -->
            <?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->