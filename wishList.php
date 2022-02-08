<?php include('head.php');?>
<?php include('header.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

?>





<!-- Page wrapper  -->
<div >
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">order Details</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">order Management</li>
</ol>
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
<form class="form-horizontal" method="POST" action="" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">





<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Service Name</label>
<div class="col-sm-9">
<select name="sname" id="sname" class="form-control" required="" onchange="s();">



<option value=" ">--Select service--</option>
<?php  
$sql2 = "SELECT * FROM service where id!=1";
$result2 = $conn->query($sql2); 
while($row2= mysqli_fetch_array($result2)){
?>
<option value ="<?php echo $row2['id'].','.$row2['prize'];?>"><?php echo $row2['sname'];?> </option>
<?php } ?>
</select>
</div>
</div>
</div>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->
<!-- <div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Discription</label>
<div class="col-sm-8">
<textarea class="form-control" rows="4" name="discription" placeholder="Discription" style="height: 80px;"></textarea>
</div>
</div>
</div>
 -->




</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Per PRICE</label>
<div class="col-sm-9">
  <input type="number" class="form-control"  name="prizes" id="prizes" readonly>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Quantity</label>
<div class="col-sm-9">
  <input type="number" class="form-control"  name="qty" id="qty" onchange="b()" min="1">
</div>
</div>
</div>



<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Ammount</label>
<div class="col-sm-9">
  <input type="text" class="form-control"  name="amount" id="amount" >
</div>
</div>
</div>



<!-- 

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Delivery Date</label>
<div class="col-sm-9">
<input type="date" name="dod" class="form-control" placeholder="Delivery Date">
</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Todays Date</label>
<div class="col-sm-9">
<input  name="todays_date" class="form-control"  value="<?php echo date('y/m/d'); ?>">
</div>
</div>
</div> -->




<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>









<div class="row">
<div class="col-lg-8" style="    margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div class="card-body">

<h1 class="text-center">All Select Item</h1>
<br>
<br>
<a href='rrremove.php' class='btn btn-danger'>Remove All</a>
<br>
<br>
<table class="table table-bordered">
    <tr>
      <th>product Name</th>
      <th>Quantity</th>
      <th>Amount</th>
      <th>Action</th>

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
          <td><a href='min.php?id=$row[0]' class='btn btn-danger'>-</a> <input type='text' value='$row[1]' name='na' readonly/><a class='btn btn-success' href='plus.php?id=$row[0]'>+</a></td>
          <td>$row[2]</td>
          <td>
            <a href='rremove.php?id=$row[0]' class='btn btn-danger'>Remove</a>
          </td>
      </tr>";
      $tot+=$row[2];
     }
    ?>
    <tr>

     <td></td>
     <td></td>
     <td>Total :<?php echo $tot; ?></td>
     <td>
     <a href='orderr.php?am=<?php echo $tot; ?>' class='btn btn-warning'>order</a>
     </td>
    </tr>
   
</table>
</div>
</div>
</div>
</div>
</div>



<?php include('footer.php');?>



<script>
function s() {
  //alert($('#sname').val());
  var sname=$('#sname').val();
  var price=sname.split(',');
  $('#prizes').val(price[1]);
}



function b() {
  //alert($('#sname').val());
  var price=$('#prizes').val();
  var qty=$('#qty').val();
  var c=price*qty;
  $('#amount').val(c);
}
</script>

<?php



if(isset($_POST["btn_save"])){


  $pro=$_POST["sname"];
  $qty=$_POST["qty"];
  $amount=$_POST["amount"];



  $f= mysqli_query($conn, "insert into wish_list values(null,'$qty','$amount','$pro')");
 
  if($f)
  {

    include("Activity.php");
        session_start(); 
        $pc=gethostname();
        $u= $_SESSION["username"];
        $idd=$_SESSION["role"];
        $ro=mysqli_query($conn,"select * from  tbl_group where id='$idd'");
        $rooo=mysqli_fetch_array($ro);
        date_default_timezone_set('Asia/Karachi');
        $da= date('l jS \of F Y h:i:s A');
        $apple = new Act('Add Service ',$u,$rooo[1],$pc,$da);
        $apple->actt();
      

      $_SESSION['success']=' Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="wishlist.php";
</script>
<?php
} else 
{
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="view_services.php";
</script>
<?php }

}?>