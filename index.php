<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('connect.php'); ?>

<style>
    /* 
    .Wall{
    position:relative;
    } */
    .calendar {
        /* position:absolute; */
        /* margin:auto; */
        /* left:0; right:0; top:20px; */
        width: 100%;
        height: 450px;
        background: white;
        box-shadow: 1px 2px 10px black;
    }

    .frame {
        position: relative;
        width: 100%;
        height: 100px;
        background: #e74c3c;
    }

    .screw {
        position: absolute;
        width: 40px;
        height: 40px;
        background-color: #bdc3c7;
        border-radius: 50px;
        top: 30%;
        box-shadow: inset 0px 0px 10px #2c3e50;
        border: 1px solid #7f8c8d;
    }

    .left {
        left: 15px;
    }

    .right {
        right: 15px;
    }

    .shine {
        position: absolute;
        background: rgba(255, 255, 255, 0.2);
        width: 30px;
        height: 30px;
        border-radius: 100%;
        left: 5px;
        top: 5px;
    }

    .line {
        position: absolute;
        width: 100%;
        height: 3px;
        background-color: #7f8c8d;
        top: 18px;
        transform: rotate(20deg);
    }

    .rerotate {
        transform: rotate(60deg);
    }

    .year {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .year h1 {
        text-align: center;
        color: white;
        font-size: 70px;
        margin: 0;
        padding: 0;
        line-height: 100px;
    }

    .content {
        position: absolute;
        width: 100%;
        height: 78%;
    }

    .content h1 {
        text-align: center;
        font-size: 250px;
        margin: 0;
        padding: 0;
        line-height: 200px;
    }

    .content h2 {
        text-align: center;
        font-size: 50px;
        margin: 0;
        padding: 0;
        line-height: 100px;
    }

    tbody tr td {
        color: #000000;
    }

</style>
<?php //echo  $_SESSION["email"];
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
$sql_currency = "select * from manage_website";
$result_currency = $conn->query($sql_currency);
$row_currency = mysqli_fetch_array($result_currency);
?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script>
 var app = angular.module('myApp', []);
 app.controller('myCtrl', function($scope, $interval) {
   $scope.theTime = new Date().toLocaleTimeString();
   $interval(function () {
       $scope.theTime = new Date().toLocaleTimeString();
   }, 1000);
 });
 </script>

<!-- Page wrapper  -->
<div>
    
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <h1 class="text-center mt-1" style="font-size:50px; font-family:Segoe Script; margin: 0;">Dashboard</h1>
        <br>
        <div class="row">
            <div class="col-md-3">
                <!-- <h1 class="text-center">Notification</h1> -->
                <br>
                <div class="row">
                    <table class="table table-bordered">
                        <tr class="table-info" style="border: 7px solid white;" >
                            <?php
                                $sql = "select * from `orders` where `date`= '" . date('Y-m-d') . "'";
                                $res = $conn->query($sql);
                                $num_rows = mysqli_num_rows($res);
                            ?>
                            <td>No. of New orders</td><td><?php echo $num_rows ?></td>
                        </tr>
                        <tr class="table-info" style="border: 7px solid white;" >
                            <?php
                                $sql = "select * from `orders` where `Delivery_status`='0'";
                                $res = $conn->query($sql);
                                $num_rows = mysqli_num_rows($res);
                            ?>
                            <td>Order Inprogress</td><td><?php echo $num_rows ?></td>
                        </tr>
                        <tr class="table-info" style="border: 7px solid white;" >
                            <?php
                                $sql = "select * from `orders` where `Delivery_status`='1' ";
                                $res = $conn->query($sql);
                                $num_rows = mysqli_num_rows($res);
                            ?>
                            <td>Order Completed</td><td><?php echo $num_rows ?></td>
                        </tr>
                        <tr class="table-info" style="border: 7px solid white;" >
                            <?php
                                $sql = "select * from `customer` ";
                                $res = $conn->query($sql);
                                $num_rows = mysqli_num_rows($res);
                            ?>
                            <td>No of customers</td><td><?php echo $num_rows ?></td>
                        </tr>
                        <tr class="table-info" style="border: 7px solid white;" >
                            <?php
                                $sql = "select * from service";
                                $res = $conn->query($sql);
                                $num_rows = mysqli_num_rows($res);
                            ?>
                            <td>No. of Services</td><td><?php echo $num_rows ?></td>
                        </tr>
                        <tr class="table-info" style="border: 7px solid white;" >
                            <?php
                                $sql = "select * from tbl_group";
                                $res = $conn->query($sql);
                                $num_rows = mysqli_num_rows($res);
                            ?>
                            <td>No. of Roles in system</td><td><?php echo $num_rows ?></td>
                        </tr>
                        <!-- <tr class="float-right">
                            <td><li class="text-center" style="color:#86aae3;font-size:30px" ng-app="myApp" ng-controller="myCtrl"> <img src="icons/clock.png" width="40px" height="50px" alt=""> </li></td>
                        </tr> -->
                    </table>
                    <div class="text-center float-left" style="color:#86aae3;font-size:30px" ng-app="myApp" ng-controller="myCtrl"> <img src="icons/clock.png" width="40px" height="50px" />{{theTime}}</div>
                </div>
                
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8">
                        <!-- <h1 class="text-center">Pages</h1> -->
                        <br>
                        <div class="row">
                            

                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_user.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/vieworder.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white">
                                                    <?php
                                                    //                           echo $num_rows 
                                                    ?>
                                                </h2>
                                                <p class="m-b-0">View User</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="add_order.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/order.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white">
                                                    <?php
                                                    //                           echo $num_rows 
                                                    ?>
                                                </h2>
                                                <p class="m-b-0">Add Order</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_order.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/vieworder.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white">
                                                    <?php
                                                    //                           echo $num_rows 
                                                    ?>
                                                </h2>
                                                <p class="m-b-0">View Order</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="add_customer.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/addcus.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">Add customer</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- </div>
                            <div class="row">-->
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_customer.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/viewuser.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View customer</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="add_services.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/Addser.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">Add Services</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_services.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/viewserr.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Services</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- </div>
                                <div class="row"> -->
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="today_delivery.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/rep.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">Today Delivery Report</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="pending_order.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/rep2.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">pending order</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_cat.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/rep.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Category</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_sale.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/rep.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Sale</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_brand.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/viewser.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Brand</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_product.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/appear.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Product</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_stock.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/viewser.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Stack</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_role.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/rolee.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Role</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- </div>
                                <div class="row"> -->
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="assign_role.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/assign.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">Add Role</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="assign_role.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/assign.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">Assign Role</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="manage_website.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/appear.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">Website Appearance</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="view_att.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/clock.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">View Attendance</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card  p-20" style="background-color:#86aae3">
                                    <a href="activityy.php">
                                        <div class="media widget-ten">
                                            <div class="media-left meida media-middle">
                                                <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                                <img src="icons/act.png" width="100%" height="50px" alt="">
                                            </div>
                                            <div class="media-body media-text-right">
                                                <h2 class="color-white"></h2>
                                                <p class="m-b-0">User Activity</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- </div>
                            <div class="row"> -->
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="Wall">
                            <div class="calendar">
                                <div class="frame">
                                    <div class="left screw">
                                        <div class="line"></div>
                                        <div class="shine"></div>
                                    </div>
                                    <div class="right screw">
                                        <div class="rerotate line"></div>
                                        <div class="shine"></div>
                                    </div>
                                    <div class="year">
                                        <h1 id="yearCaption">1990</h1>
                                    </div>
                                </div>
                                <div class="content">
                                    <h2 id="monthCaption">May</h2>
                                    <h1 id="dayCaption">28</h1>
                                </div>
                                <div class="over"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Container fluid  -->
<?php include('footer.php'); ?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->


<script>
    var date = new Date();
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";

    document.getElementById('yearCaption').innerHTML = date.getFullYear();
    document.getElementById('monthCaption').innerHTML = month[date.getMonth()];
    document.getElementById('dayCaption').innerHTML = date.getDate();
</script>