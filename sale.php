<?php  include('head.php');?>
<?php include('header.php');?>
  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
        <!-- Page wrapper  -->
        <div >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Sale</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">sale </li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
        
                        
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
                    $sql = mysqli_query($conn,"SELECT * FROM `tbl_stock`");
                    while ($row = mysqli_fetch_assoc($sql)) {
                      ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['p_name'] ?></td>
                        <td><?php echo $row['per_price'] ?></td>
                        <td><?php echo $row['price_express'] ?></td>
                        <td><?php echo $row['qtn'] ?></td>
                        
                        <td><?php echo $row['category'] ?></td>
                        
                        <td>
                            <?php
                            if ($row['qtn']==0) {
                                echo '
                                <input type="submit" value="Out of Stock" class="btn btn-danger">
                                ';
                            }
                            else {
                                
                            ?>
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <input type="hidden" name="name" value="<?php echo $row['p_name'] ?>">
                                <input type="hidden" name="price" value="<?php echo $row['per_price'] ?>">
                                <input type="hidden" name="qty" value="1">
                                <input type="hidden" name="proqty" value="<?php echo $row['qtn'] ?>">
                                <input type="hidden" name="brand" value="<?php echo $row['brand'] ?>">
                                <input type="submit" value="Add to Sale" name="Add_To_Cart" class="btn btn-info">
                                
                            </form>
                            <?php }?>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            
            </table>

<br>

<?php if (isset($_SESSION['cart'])) { ?>
<center><h2>Selected Items for Sale</h2></center>
<br>


<table  class="table table-bordered table-striped">
                
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php
                    $total = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                        ?>
                    <tr>
                        
                        <td><?php echo $value['Item_Name'] ?></td>
                        <td><?php echo $value['Price'] ?></td>

                        <td>
                        <form action="cart.php" method="POST"> 
                        <input type="number" name='update_quantity' class="text-center iquantity" value="<?php echo $value['Quantity'] ?>" min="1" max="<?php echo $row['qtn'] ?>" onchange="this.form.submit();">
                        <input type="hidden" name='id' value="<?php echo $value['id'] ?>">

                        </form>
                        </td>

                        <td><?php $amount = $value['Price']*$value['Quantity']; echo $amount ?></td>
                       
                        <td>
                            <form action="cart.php" method="post">
                            <input type="hidden" name='id' value="<?php echo $value['id'] ?>">
                            <input type="submit" value="Remove Item" name="remove" class="btn btn-danger">
                        </form>
                        </td>
                    </tr>
                    <?php $total+=$amount; }?>

                    <tr>
                        <td></td>
                        <td>Subtotal:</td>
                        <td><?php echo $total ?></td>
                        <td>
                            <form action="invoice.php" method="POST">
                            <input type="hidden" name="userid" value="<?php echo $_SESSION['id'] ?>">
                                <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
                                <input type="hidden" name="time" value="<?php 
             
             date_default_timezone_set("Asia/Karachi");
             echo date("Y-m-d h:i:sa");
             ?>">
                                <input type="hidden" name="total" value="<?php echo $total ?>">
                                <input type="submit" value="Create Sale" name="order" class="btn btn-info">
                            
                            </form>
                        </td>
                    </tr>
                   
                </tbody>
            
            </table>
            <?php }?>
</div>


</div>
</div>
</div>
</div>

<?php

if(isset($_GET["btn_save"])){


    $name=$_GET["Product_Name"];
    $price=$_GET["per_price"];
    $qtn=$_GET["qtn"];
    $brand=$_GET["brand"];
    $cat=$_GET["cat"];
    
   

    $s=mysqli_query($conn,"select * from tbl_stock where p_name='$name'");

    $ar=mysqli_fetch_assoc($s);
  
    $saa=mysqli_num_rows($s);

 // $a= mysqli_query($conn,"insert into sale values(null,'$name','$price','$qtn','$brand','$cat')");



//   var_dump($saa);

  
  
      if($saa > 0 || $ar['p_name']==$name){
        $arrid = $ar['id'];
       // echo $ar[3];

        if($ar['qtn']>0||$ar['qtn']>=$qtn){
            $t= $ar['qtn'] - $qtn;
            mysqli_query($conn,"update tbl_stock set qtn='$t' where id='$arrid'");
            mysqli_query($conn,"insert into sale values(null,'$name','$price','$qtn','$brand','$cat')");
      
              
                // if ($a)
                // {
                    
                echo '<script>swal("Good job!", "Data inserted successfully!", "success");</script>';
                // } 
                // else{
                // echo '<script>swal("Error!", "Data not inserted!", "error")</script>';
                // }

      
        }
      
        else{
            echo '<script>swal("Error!", "Quantity is grater!", "error");</script>';
        }
        }
        else{
     //   mysqli_query($conn,"insert into tbl_stock (`p_name`, `per_price`, `qtn`, `category`, `brand`) values('$name','$price','$qtn','$cat','$brand')");
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


