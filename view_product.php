<?php include('head.php');?>
<?php include('header.php');?>
<?php 

if(isset($_GET['id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
<h3 class="popup__content__title">
Sure
</h1>
<p>Are You Sure To Delete This Record?</p>
<p>
<a href="del_order.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
<a href="view_order.php" class="button button--error" data-for="js_success-popup">No</a>
</p>
</div>
</div>
<?php } ?>



<!-- Page wrapper  -->
<div >
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"> View Products</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">View Products</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->

<!-- /# row -->
<div class="card">
<div class="card-body">
<?php if(isset($useroles)){  if(in_array("add_product",$useroles)){ ?> 
<a href="add_product.php"><button class="btn btn-primary">Add Product</button></a>
<?php } } ?>
<div class="table-responsive m-t-40">
<table id="myTable" class="table table-bordered table-striped">
<thead>
<tr>
<th>id</th>
<th>Product Name</th>
<th>Category Name</th>
<th>Brand Name</th>
<th>Action</th>
<!-- <th>discription</th>  
<th>Pick up date</th>
<th>Dilivery date</th> -->
</tr>
</thead>
<tbody>
<?php 
include 'connect.php';
$sql = "SELECT p.id,b.b_name,c.Name,p.name FROM `products` as p,category as c,brand as b where c.Id=p.cat_id and b.id=p.b_id";
$result = $conn->query($sql);
// echo $result;
while($row = $result->fetch_assoc())

{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['b_name']; ?></td>

<td>
<?php if(isset($useroles)){  if(in_array("edit_product",$useroles)){ ?> 
<a href="edit_product.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-sm btn-primary" ><i class="fa fa-pencil"></i></button></a>
<?php } } ?>

</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>

<?php include('footer.php');?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
<h3 class="popup__content__title">
Success 
</h1>
<p><?php echo $_SESSION['success']; ?></p>
<p>
<button class="button button--success" data-for="js_success-popup">Close</button>
</p>
</div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
<h3 class="popup__content__title">
Error 
</h1>
<p><?php echo $_SESSION['error']; ?></p>
<p>
<button class="button button--error" data-for="js_error-popup">Close</button>
</p>
</div>
</div>
<?php unset($_SESSION["error"]);  } ?>
<script>
var addButtonTrigger = function addButtonTrigger(el) {
el.addEventListener('click', function () {
var popupEl = document.querySelector('.' + el.dataset.for);
popupEl.classList.toggle('popup--visible');
});
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
</script>