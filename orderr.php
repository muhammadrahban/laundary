<?php include('head.php');?>
<?php include('header.php');?>

<?php include('sidebar.php');?>   
   
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Order</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
               
            <div class="row">

               <div class="col-md-6">
               <form action="" method="post">

<label >Customer Name:</label>
<br>
<select name="cus" id="" class="form-control">
<option value="">----selectcustomer-----</option>
<?php
   $r=mysqli_query($conn,"select *from customer order by id desc");
   while($row=mysqli_fetch_array($r)){
    echo " 
    
    <option value='$row[0]'>$row[1]</option>
    ";

   }
?>
</select>
<br>
<label >order code:</label>
<br>
<?php

$a="XXX";
$s=rand(10000,50000);
$f=$a.$s;
echo "
<input type='text' class='form-control' name='ran' value='$f' readonly/>
";
?>
<br>
<label >Total Amount:</label>
<br>
<?php

$t=$_GET["am"];
echo "
<input type='text' class='form-control' name='tot' value='$t' readonly/>
";

?>
<br>
<label >Delivery Date:</label>
<br>
<input type="date" name="deli" class="form-control" id=""/>
<br>
<label >Todays Date:</label>
<br>
<input  name="today" class="form-control"  value="<?php echo date('y/m/d'); ?>">
<br>
<label >Payment Method:</label>
<br>
<select name="pay" id="" class="form-control">
    <option value="">----select Payment Type-----</option>
    <option value="cash on delivery">cash on delivery</option>
    <option value="Debit Cart">Debit Cart</option>
</select>
<br>
<input type="submit" value="Order Punch" name="btn" class="btn btn-warning">
</form>
               </div>
               <div class="col-md-6">

               <h2>Order Details</h2>

               <table class="table table-bordered">
    <tr>
      <th>product Name</th>
      <th>Quantity</th>
      <th>Amount</th>
      
    </tr>
    <?php
    
//     include 'connect.php';
    $sql = "SELECT * FROM wish_list";
     $result = $conn->query($sql);
      $tot=0;
     while($row = mysqli_fetch_array($result)) { 
      $w= mysqli_query($conn,"select * from service where id='$row[3]'" );
     $r= mysqli_fetch_array($w);
     echo  "<tr>
     
      

      
          <td>$r[1]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          
      </tr>";
    
     }
    ?>   
    </table>

               </div>
            </div>

           
                     
        </div>
</div>
            <!-- End Container fluid  -->
            <?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->



<?php



if(isset($_POST["btn"])){

$aa=mysqli_query($conn,"select * from wish_list ");


while($bb=mysqli_fetch_array($aa)){

    
}
}



?>