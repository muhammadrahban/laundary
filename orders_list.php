<?php  include('head.php');?>
<?php include('header.php');?>

<?php include('sidebar.php');  include 'connect.php';?>   
   
        <!-- Page wrapper  -->
        <div class="page-wrapper">
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
                   
                     <th>Order Date</th>
                     <th>Order Time</th>
                    <th>Invoice no</th>
                    <th>Subtotal</th>
                    <th>User</th>
                    <th>Status</th>
                    <th></th>
                     </tr>
                    </thead>

                    <tbody>
                    <?php 
                    include 'connect.php';

                $sql = "SELECT * FROM orders ORDER BY id DESC";

             $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
                                      ?>
                  <tr>
                  
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['time'] ?></td>
                        <td><?php echo $row['invoice'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        
                        <?php
                            $user = mysqli_query($conn,"select * from admin where id='$row[user_id]'");
                            $us = mysqli_fetch_assoc($user);
                            ?>
                        <td><?php echo $us['username'] ?></td>
                        <td><?php echo $row['Delivery_status'] ?></td>

                        <td>
                            <!-- Order details -->
                            <table class="table ">
                            <thead>
                    <tr>
                   
                     <th>Product Name</th>
                     <th>Price</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    
                     </tr>
                    </thead>

                    <tbody>
                    <?php 
                    $od = mysqli_query($conn,"SELECT * FROM order_details where order_id='$row[id]'");
                    while($fetch = mysqli_fetch_assoc($od)) {
                     ?>
                     <tr>

                        <td><?php echo $fetch['pname'] ?></td>
                        <td><?php echo $fetch['price'] ?></td>
                        <td><?php echo $fetch['qty'] ?></td>
                        <td><?php echo $fetch['amount'] ?></td>
                        </tr>
                                      <?php }?>
                    </tbody>
                            </table>
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