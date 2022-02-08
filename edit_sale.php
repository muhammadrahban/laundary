
<?php include('head.php');?>

<?php include('header.php');?>
<?php ?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

if(isset($_POST["btn_update"]))
{
extract($_POST);
/*$image = $_FILES['image']['name'];
$target = "uploadImage/Profile/".basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
@unlink("uploadImage/Profile/".$_POST['old_image']);
$msg = "Image uploaded successfully";
}else{
$msg = "Failed to upload image";
}*/

 $q1="UPDATE `sale` SET `total`='$total' WHERE `id`='".$_GET['id']."'"; 
// $q2=$conn->query($q1);

if ($conn->query($q1) === TRUE) {
    $q3="delete from `sale_details` WHERE `s_id`='".$_GET['id']."'"; 
    $conn->query($q3);
    for ($i=0; $i < count($p_id) ; $i++) { 
        $sql5 = "INSERT INTO `sale_details`(`s_id`,`p_id`,`qty`,`price`,`sub_total`) VALUES ('".$_GET['id']."','$p_id[$i]','$quantity[$i]','$price[$i]','$sub_total[$i]')";
        $conn->query($sql5);
    }
    include("Activity.php");
        session_start(); 
        $pc=gethostname();
        $u= $_SESSION["username"];
        $idd=$_SESSION["role"];
        $ro=mysqli_query($conn,"select * from  tbl_group where id='$idd'");
        $rooo=mysqli_fetch_array($ro);
        date_default_timezone_set('Asia/Karachi');
        $da= date('l jS \of F Y h:i:s A');
        $apple = new Act('Edit Sale ',$u,$rooo[1],$pc,$da);
        $apple->actt();
      

$_SESSION['success']=' Record Successfully Updated';
?>
<script type="text/javascript">
window.location="view_sale.php";
</script>
<?php
} else {
$_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="view_sale.php";
</script>
<?php
}
}

?>


<?php
$que="select * from sale where id='".$_GET["id"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
//print_r($row);
    extract($row);
    $date = $row['date'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $total = $row['total'];

}

?> 



<!-- Page wrapper  -->
<div >
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Sales</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Sales Management</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->

<!-- /# row -->
<div class="row">
<div class="col-lg-10" style="    margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div class="card-body">
<div class="input-states">
<form class="form-horizontal" method="POST" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $current_date;?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Sale Date</label>
<div class="col-sm-9">
<input type="date" name="date" value="<?php echo $date;?>" class="form-control" placeholder="Price" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">First Name</label>
<div class="col-sm-9">
<input type="text" name="fname" value="<?php echo $fname ?>" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="First Name" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Last Name</label>
<div class="col-sm-9">
<input type="text" name="lname" value="<?php echo $lname ?>"  class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" required="">
</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Product Name</label>
<div class="col-sm-9">
<select name="p_id"  id="p_id" class="form-control" required="">

  <option value=" ">--Select Product--</option>
  <?php  
  $sql2 = "SELECT * FROM products";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['name'];?>"><?php echo $row2['name'];?> </option>
  <?php } ?>
  </select>
</div>
</div>
</div>


<table id="exampleG" class="table table-striped table-bordered " style="overflow-x:auto;">
  <thead>
      <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Available Quantity</th>
          <th>Quantity</th>
          <th>Rate</th>
          <th>Sub Total</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
        <?php
            $sql2 = "SELECT * FROM sale_details as s,tbl_stock as t, products as p where s_id='".$_GET["id"]."' and p.id=s.p_id and p.id=t.p_id";
            $result2 = $conn->query($sql2); 
            $a=1;
            while($row2= mysqli_fetch_array($result2)){
                ?>
                <tr>
                    <td> <input  name='p_id[]' type='text' class='form-control <?php echo $row2['p_id'] ?>' readonly value='<?php echo $row2['p_id'] ?>'></td>
                    <td> <?php echo $row2['name'] ?></td>
                    <td><input style='width: fit-content;' type='number' class='form-control' readonly  value='<?php echo $row2['qtn'] ?>'></td>
                    <td><input style='width: fit-content;' type='text' class='form-control quantity' required min='0' id='<?php echo $a ?>' max='2' name='quantity[]' value='<?php echo $row2['qty'] ?>'></td>
                    <td> <input style='width: fit-content;' required type='text' class='form-control price price<?php echo $a ?>' min='1' id='price<?php echo $a ?>' data-id='<?php echo $a ?>' name='price[]' value='<?php echo $row2['price'] ?>'></td>
                    <td> <input style='width: fit-content;' type='text' readonly class='form-control abc sub<?php echo $a ?>' name='sub_total[]' id='sub<?php echo $a ?>' value='<?php echo $row2['sub_total'] ?>'></td>
                    <td> <button type='button' id='<?php echo $a ?>' class='btn btn-sm red delete' >dlt</button></td>
                </tr>
                <?php   
                $a++; 
            }
        ?>
  </tbody>
  </table>
<br>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Total</label>
<div class="col-sm-6">
<input type="text" readonly name="total" value="<?php echo $total ?>"  id="total" class="form-control" id="event" onkeydown="return isNumber(event);" required="">
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




<?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<script>
    $(document).on('change','#p_id',function(){
        var rowCount = $('#exampleG tr').length;
        var name=$(this).val();
        // console.log(id);
        $.ajax({
            url:"/pages/get_product.php?name="+name,
            type:"GET",
            error: function (request, error) {
                        alert(" Can't do because: " + error +request);
                    },
            success:function(data){
              
              data = JSON.parse(data);
              console.log(data);

                // if(data.vstatus == 0)
                // {
                    if($('#'+data.id).length)
                    {

                    }
                    else
                    {
                        $("#exampleG").append("<tr><td><input  name='p_id[]' type='text' class='form-control "+data[0]+"' readonly value='"+data[0]+"'></td><td>"+data[1]+"</td></td><td><input style='width: fit-content;' type='number' class='form-control' readonly  value='"+data[3]+"'></td><td><input style='width: fit-content;' type='text' class='form-control quantity' required min='0' id='"+rowCount+"' max='"+data[3]+"' name='quantity[]' value='1'></td><td><input style='width: fit-content;' required type='text' class='form-control price price"+rowCount+"' min='1' id='price"+rowCount+"' data-id='"+rowCount+"' name='price[]' value='"+data[2]+"'><td><input style='width: fit-content;' type='text' readonly class='form-control abc sub"+rowCount+"' name='sub_total[]' id='sub"+rowCount+"' value='"+data[2]+"'></td><td><button type='button' id='"+rowCount+"' class='btn btn-sm red delete' >dlt</button></td></tr>");
                        var amount=0;
                        var total=0;
                        var rowCount1 = $('#exampleG tr').length;
                        for (let i = 1; i < rowCount1; i++) {
                            amount = +amount + +$('.sub'+i).val();
                            total = +total + +$('.price'+i).val();
                        }
                        $('#total').val(amount);

                    }
                // }
               
            }
        });
    });

    $('table').on('click', '.delete', function(e){
        var id=$(this).attr('id');
        var sub=$('#sub'+id).val();

        $(this).closest('tr').remove();
        $(".abc").each(function (i){
          $(this).removeClass('sub'+(i+2));
          $(this).addClass('sub'+(i+1));
          i=+i + +1;
           $(this).attr('id','sub'+i);
        });
        $(".price").each(function (i){
           $(this).removeClass('price'+(i+2));
           $(this).addClass('price'+(i+1));
          i=+i + +1;
           $(this).attr('id','price'+i);
           $(this).attr('data-id',i);
        });
        $(".quantity").each(function (i){
            i=+i + +1;
            $(this).attr('id',i);
        });
        $(".delete").each(function (i){
            i=+i + +1;
            $(this).attr('id',i);
        });
        var amount=0;
        var total=0;
        var rowCount1 = $('#exampleG tr').length;
        for (let i = 1; i < rowCount1; i++) {
            amount = +amount + +$('.sub'+i).val();
            total = +total + +$('.price'+i).val();
        }
        $('#total').val(amount);
        

    });

    $('table').on('keyup','.quantity',function(){
        var a=$(this).val();
        var id=$(this).attr('id');
        var cost=$('#price'+id).val();
        var sub=a * cost;
        $('#sub'+id).val(sub);
        var amount=0;
        var rowCount = $('#exampleG tr').length;
        for (let i = 1; i < rowCount; i++) {
            amount = +amount + +$('.sub'+i).val();
        }
        $('#total').val(amount);
        
    });

    $('table').on('keyup','.price',function(){
        var id=$(this).attr('data-id');
        var cost=$(this).val();
        var quan=$('#'+id);
        quan=quan.val();
        var sub=quan * cost;
        $('#sub'+id).val(sub);
        var amount=0;
        var total=0;
        var rowCount1 = $('#exampleG tr').length;
        for (let i = 1; i < rowCount1; i++) {
            amount = +amount + +$('.sub'+i).val();
        }
        $('#total').val(amount);
        
    });
</script>