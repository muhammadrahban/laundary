
<?php ob_start(); include('head.php');?>
<?php include('header.php');?>
<?php ?>



  <!-- Page wrapper  -->
        <div >
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Purchase</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Purchase</li>
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
                                 <a href="purchase.php"><button class="btn btn-primary">Add Purchase</button></a> 
                                <div class="table-responsive m-t-40">
                                  <br>
                              <?php if(isset($_GET['edit_id'])){
                                $data = mysqli_query($conn,"select * from tbl_purchase where id='$_GET[edit_id]'");
                                $fetch = mysqli_fetch_assoc($data);
                                ?>
                                <h2>Update Record</h2>
                                <form action="crud.php" method="POST">
                                  <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>">
                                  <input type="text" name="name" class="form-control" required value="<?php echo $fetch['p_name'] ?>">
                                  <br>

                                  <input type="number" name="price" class="form-control" required value="<?php echo $fetch['per_price'] ?>">
                                  <br>

                                  <input type="number" name="qty" class="form-control" required value="<?php echo $fetch['qtn'] ?>">
                                  <br>

                                  <input type="text" name="brand" class="form-control" required value="<?php echo $fetch['brand'] ?>">
                                  <br>

                                  <input type="text" name="category" class="form-control" required value="<?php echo $fetch['category'] ?>">
                                  <br>

                                  <input type="submit" class="btn btn-info" name="purchase_edit" value="Update Record" >
                                  <br>
                                </form>
                                <?php }?>
                                  <br>
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Product Name</th>
                                                <th>Per price</th>
                                                <th>Quantity</th>
                                                <th>Brand</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          include 'connect.php';
                                          $sql = "SELECT * FROM tbl_purchase order by id desc";
                                           $result = $conn->query($sql);
                                            $i=1;
                                           while($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['p_name']; ?></td>
                                                <td><?php echo $row['per_price']; ?></td>
                                                <td><?php echo $row['qtn']; ?></td>
                                                <td><?php echo $row['brand']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td>
                                                  
                                                <a href="view_purchase.php?edit_id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                               <a href="view_purchase.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a> 
                                                </td>
                                            </tr>
                                          <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
         
          <?php
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = mysqli_query($conn,"delete from tbl_purchase where id='$id'");
            if ($sql) {
              header("location:view_purchase.php");
            }
          }
          ?>

<?php ob_flush(); include('footer.php');?>

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
