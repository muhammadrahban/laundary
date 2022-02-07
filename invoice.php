<?php
session_start();
$db = mysqli_connect("localhost","root","","laundary_db");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" dbntent="IE=edge">
  <meta name="viewport" dbntent="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>
  .invoice{
    width: 250px;
    height: 360px;
    
  }
  </style>
</head>
<body>
<?php
    
    
 if (isset($_POST['order'])) {
     $total = $_POST['total'];
     $user_id = $_POST['userid'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $rand=strtoupper(substr(uniqid(sha1(time())),0,4));
      $invoice="E-00".$rand;

    $sql = mysqli_query($db,"INSERT INTO `orders` (`id`, `total`, `user_id`, `date`, `time`, `invoice`) VALUES (null,'$total','$user_id','$date','$time','$invoice')");

    if ($sql) {
       
         $OrderId = mysqli_insert_id($db);

        $selectInvoice = mysqli_query($db,"SELECT * FROM `orders` ORDER BY Id DESC LIMIT 1");
      $row = mysqli_fetch_assoc($selectInvoice);
      
     
         foreach ($_SESSION["cart"] as $key => $value) {
         
            $amount = $value['Price'] * $value['Quantity'];

            $a = mysqli_query($db,"INSERT INTO `order_details` VALUES (null,'$value[Item_Name]','$value[Price]','$value[Quantity]','$amount','$OrderId')");

            $up = mysqli_query($db,"select * from tbl_stock where id='$value[id]'");
            $c = mysqli_fetch_assoc($up);

           $new_qty = $c['qtn'] - $value['Quantity'];

           mysqli_query($db,"update tbl_stock set qtn='$new_qty' where id='$value[id]'");

            if ($a) {
      
                unset($_SESSION["cart"]);
            }
          
      }//cart items


        $pro = mysqli_query($db,"SELECT * FROM `order_details` WHERE order_id='$OrderId'");
       

         
         }//if query run

         echo "
         <script>
         window.print();
         </script>
         ";

 }

    ?>

<div class="invoice">
<center><img src="uploadImage/Logo/A1 Clean (Neww).png" width="80" height="80" style="border-radius: 100px;" alt=""></center>

<center><h4>Laundary Company LTD</h4></center>

<center><h4>Contact : 0321-8896547</h4></center>
<hr>

<p >Invoice: <span style="padding: 10px;"><?php echo $row['invoice']; ?></span></p> 

<p>Date: <span style="padding: 10px;"><?php echo $row['date']; ?> </span></p>

<p>Time: <span style="padding: 10px;"><?php echo $row['time']; ?> </span></p>

<?php
$user = mysqli_query($db,"select * from admin where id='$user_id'");
$us = mysqli_fetch_assoc($user);
?>

<p>User: <span style="padding: 10px;"><?php echo $us['username']; ?> </span></p>

<hr>

<table>

<thead>
<tr>
<th>Items</th>
<th style="padding-left: 8px;">Price</th>
<th style="padding-left: 8px;">Quantity</th>
<th style="padding-left: 8px;">Amount</th>
</tr>
</thead>


<tbody>

<?php
while ($fetch = mysqli_fetch_array($pro)) {
?>

<tr>
<td><?php echo $fetch['pname'] ?></td>
<td style="padding-left: 10px;"><?php echo $fetch['price'] ?></td>
<td style="padding-left: 30px;"><?php echo $fetch['qty'] ?></td>
<td style="padding-left: 10px;"><?php echo $fetch['amount'] ?></td>
</tr>

<?php } ?>

</tbody>

<tr>
<td></td>
<td></td>
<td><b>Total :</b></td>
<td><?php echo $row['total'] ?></td>
</tr>

</table>
<hr>
<a href="sale.php" style="color: black;text-decoration: none;"><center>Thank you For Order</center></a>

  </div>   
</body>
</html>

