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

    $sql = mysqli_query($db,"INSERT INTO `wishlist_order`(`id`, `total`, `invoice`, `date`, `time`, `user`) VALUES (null,'$total','$invoice','$date','$time','$user_id')");

    if ($sql) {
       
         $OrderId = mysqli_insert_id($db);

        $selectInvoice = mysqli_query($db,"SELECT * FROM `wishlist_order` ORDER BY Id DESC LIMIT 1");
      $row = mysqli_fetch_assoc($selectInvoice);
      
     
         foreach ($_SESSION["wish"] as $key => $value) {
         
            $amount = $value['Price'] * $value['Quantity'];

            $a = mysqli_query($db,"INSERT INTO `wish_details` VALUES (null,'$value[Item_Name]','$value[Price]','$value[Quantity]','$amount','$OrderId')");


            $sel = mysqli_query($db,"select * from wish_list where service='$value[Item_Name]'");
            $r = mysqli_fetch_assoc($sel);

              mysqli_query($db,"delete from wish_list");
            

            if ($a) {
      
                unset($_SESSION["wish"]);
            }
          
      }//cart items


        $pro = mysqli_query($db,"SELECT * FROM `wish_details` WHERE oid='$OrderId'");
       

         
         }//if query run

         echo "
         <script>
         window.print();
         </script>
         ";

 }
 
 if (isset($_POST['wish_order'])) {
    
    $total = $_POST['total'];
    $user_id = $_POST['userid'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $rand=strtoupper(substr(uniqid(sha1(time())),0,4));
     $invoice="E-00".$rand;

     $id = $_POST['id'];
     $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $amount = $_POST['amount'];

   $sql = mysqli_query($db,"INSERT INTO `wishlist_order` VALUES (null,'$total','$invoice','$date','$time','$user_id')");

    if ($sql) {
        
        $OrderId = mysqli_insert_id($db);

        $selectInvoice = mysqli_query($db,"SELECT * FROM `wishlist_order` ORDER BY Id DESC LIMIT 1");
      $row = mysqli_fetch_assoc($selectInvoice);


      $sel = mysqli_query($db,"select * from wish_list");

      while ($r = mysqli_fetch_assoc($sel)) {
          $amount = $r['price']*$r['quantity'];
      $a = mysqli_query($db,"INSERT INTO `wish_details` VALUES (null,'$r[service]','$r[price]','$r[quantity]','$amount','$OrderId')");
      }


      
          mysqli_query($db,"delete from wish_list");
    


    }
    $pro = mysqli_query($db,"SELECT * FROM `wish_details` WHERE oid='$OrderId'");

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
<td><?php echo $fetch['name'] ?></td>
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
<a href="wishlist.php" style="color: black;text-decoration: none;"><center>Thank you For Order</center></a>

  </div>   
</body>
</html>

