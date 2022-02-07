
<?php ob_start(); include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>

 <?php
 include('connect.php');

 $id = $_GET['id'];

 $query = mysqli_query($conn,"select * from tbl_stock where id='$id'");
    $row= mysqli_fetch_assoc($query);

?>

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Stock Management</h3> </div>
                <div class="col-md-7 align-self-center">
                 
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
                                    <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data" name="userform">

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Product Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="name" class="form-control" placeholder="First Name" id="event" onkeydown="return alphaOnly(event);" value="<?php echo $row['p_name']; ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Product Price</label>
                                                <div class="col-sm-9">
                                                    <input type="number"  name="price" id="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" value="<?php echo $row['per_price']; ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Price Express</label>
                                                <div class="col-sm-9">
                                                    <input type="number"  name="exp" id="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" value="<?php echo $row['price_express']; ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Product Quantity</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="qty" class="form-control"  placeholder="Email" value="<?php echo $row['qtn']; ?>" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Product Category</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="category" class="form-control"  placeholder="Email" value="<?php echo $row['category']; ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Product Brand</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="brand" class="form-control"  placeholder="Email" value="<?php echo $row['brand']; ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">status</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="status" class="form-control"  placeholder="Email" value="<?php echo $row['status']; ?>" required>
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

                <?php
                if (isset($_POST['btn_update'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];
                    $status = $_POST['status'];
                    $cat = $_POST['category'];
                    $brand = $_POST['brand'];
                    $status = $_POST['status'];

                  $sql =  mysqli_query($conn,"UPDATE `tbl_stock` SET `p_name`='$name',`per_price`='$price',`qtn`='$qty',`status`='$status',`category`='$cat',`brand`='$brand',`price_express`='$exp' WHERE id='$id'");
               
                    header("location:stock.php");
               
                }
                
                ?>
    

<?php ob_flush(); include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

