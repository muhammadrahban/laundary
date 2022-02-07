<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

?>





<!-- Page wrapper  -->
<div class="page-wrapper">
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
<form class="form-horizontal" method="POST" action="pages/save_sale.php" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $current_date;?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Sale Date</label>
<div class="col-sm-9">
<input type="date" name="date" value="<?php echo $current_date;?>" class="form-control" placeholder="Price" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">First Name</label>
<div class="col-sm-9">
<input type="text" name="fname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="First Name" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Last Name</label>
<div class="col-sm-9">
<input type="text" name="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" required="">
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
  </tbody>
  </table>
<br>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Total</label>
<div class="col-sm-6">
<input type="text" readonly name="total" id="total" class="form-control" id="event" onkeydown="return isNumber(event);" required="">
</div>
</div>
</div>





<button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
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