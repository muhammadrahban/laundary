<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>




<script>
  var app = angular.module('myApp', []);
  app.controller('myCtrl', function($scope, $interval) {
    $scope.theTime = new Date().toLocaleTimeString();
    $interval(function() {
      $scope.theTime = new Date().toLocaleTimeString();
    }, 1000);
  });
</script>
<?php
include('connect.php');
$sql = "select * from admin where id = '" . $_SESSION["id"] . "'";
$result = $conn->query($sql);
$row1 = mysqli_fetch_array($result);

$q = "select * from tbl_permission_role where role_id='" . $row1['group_id'] . "'";
$ress = $conn->query($q);
//$row=mysqli_fetch_all($ress);
$name = array();
while ($row = mysqli_fetch_array($ress)) {
  $sql = "select * from tbl_permission where id = '" . $row['permission_id'] . "'";
  $result = $conn->query($sql);
  $row1 = mysqli_fetch_array($result);
  array_push($name, $row1[1]);
}
$_SESSION['name'] = $name;
$useroles = $_SESSION['name'];

?>

<!-- Left Sidebar  -->
<div class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-devider"></li>
        <li class="nav-label">Home</li>
        <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
        </li>

        <?php if (isset($useroles)) {
          if (in_array("manage_user", $useroles)) { ?>
            <li class="nav-label">Owner</li>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">User Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("add_user", $useroles)) { ?>
                    <li><a href="add_user.php">Add User</a></li>
                <?php }
                } ?>
                <li><a href="view_user.php">View User</a></li>
              </ul>
            </li>
        <?php }
        } ?>




        <?php if (isset($useroles)) {
          if (in_array("add_order", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-inr"></i><span class="hide-menu">Order Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("add_order", $useroles)) { ?>
                    <li><a href="add_order.php">Add order</a></li>
                <?php }
                } ?>
                <li><a href="view_order.php">view order</a></li>
              </ul>
            </li>
        <?php }
        } ?>







        <?php if (isset($useroles)) {
          if (in_array("Add_customer", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Customer Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("Add_customer", $useroles)) { ?>
                    <li><a href="add_customer.php">Add Customer</a></li>

                <?php }
                } ?>
                <li><a href="view_customer.php">View Customer</a></li>
              </ul>
            </li>
        <?php }
        } ?>





        <?php if (isset($useroles)) {
          if (in_array("Views_Reports", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">View Reports</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("Views_Reports", $useroles)) { ?>
                    <li><a href="today_delivery.php">Today's Delivery Report</a></li>
                    <li><a href="pending_order.php">Pending Orders</a></li>

                <?php }
                } ?>

              </ul>
            </li>
        <?php }
        } ?>





        <?php if (isset($useroles)) {
          if (in_array("add_services", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bandcamp"></i><span class="hide-menu">Services Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("add_services", $useroles)) { ?>
                    <li><a href="add_services.php">Add Servises </a></li>


                <?php }
                } ?>
                <li><a href="view_services.php">View Services</a></li>
              </ul>
            </li>
        <?php }
        } ?>

        <?php if (isset($useroles)) {
          if (in_array("add_att", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Attendance Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("add_att", $useroles)) { ?>
                    <li><a href="add_att.php">Add Attendance</a></li>

                <?php }
                } ?>
                <li><a href="view_att.php">View Attendance</a></li>
              </ul>
            </li>
        <?php }
        } ?>



        <?php if (isset($useroles)) {
          if (in_array("add_cat", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bandcamp"></i><span class="hide-menu">Product Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("add_cat", $useroles)) { ?>
                    <li><a href="add_cat.php">Add Category </a></li>
                    <li><a href="view_cat.php">View Category</a></li>


                <?php }
                } ?>

                <?php if (isset($useroles)) {
                  if (in_array("add_brand", $useroles)) { ?>
                    <li><a href="add_brand.php">Add Brand </a></li>
                    <li><a href="view_brand.php">View Brand</a></li>


                <?php }
                } ?>

                <?php if (isset($useroles)) {
                  if (in_array("add_product", $useroles)) { ?>
                    <li><a href="add_product.php">Add Product </a></li>
                    <li><a href="view_product.php">View Product</a></li>


                <?php }
                } ?>

                <?php if (isset($useroles)) {
                  if (in_array("add_stock", $useroles)) { ?>
                    <li><a href="add_stock.php">Add Stock </a></li>
                    <li><a href="view_stock.php">View Stock</a></li>


                <?php }
                } ?>

              </ul>
            </li>
        <?php }
        } ?>

        <?php if (isset($useroles)) {
          if (in_array("add_sale", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Sales Management</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("add_sale", $useroles)) { ?>
                    <li><a href="add_sale.php">Add Sale</a></li>

                <?php }
                } ?>
                <li><a href="view_sale.php">View Sale</a></li>
              </ul>
            </li>
        <?php }
        } ?>



        <?php if ($_SESSION["username"] == 'admin') { ?>
          <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-shield"></i><span class="hide-menu">User Permissions</span></a>
            <ul aria-expanded="false" class="collapse">
              <li><a href="assign_role.php">Assign Role</a></li>
              <li><a href="view_role.php">View Role</a></li>
            </ul>
          </li>

        <?php } ?>





        <?php if (isset($useroles)) {
          if (in_array("manage_website", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu"> Setting</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("manage_website", $useroles)) { ?>
                    <li><a href="manage_website.php">Appearance Management</a></li>

                <?php }
                } ?>

              </ul>
            </li>
        <?php }
        } ?>





        <?php if (isset($useroles)) {
          if (in_array("Activity", $useroles)) { ?>
            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-tasks"></i><span class="hide-menu"> Activity</span></a>
              <ul aria-expanded="false" class="collapse">
                <?php if (isset($useroles)) {
                  if (in_array("Activity", $useroles)) { ?>
                    <li><a href="Activityy.php">Activity Management</a></li>

                <?php }
                } ?>

              </ul>
            </li>
        <?php }
        } ?>
        <!-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

        <li><a href="#myModal" data-toggle="modal"><i class="fa fa-calculator"> </i> Calculator</a></li>


        <br>
        <li class="text-center" style="color:#86aae3;font-size:30px" ng-app="myApp" ng-controller="myCtrl"> <img src="icons/clock.png" width="40px" height="50px" alt=""> {{theTime}}</li>




      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->

</div>
<!-- End Left Sidebar  -->





















<style>
  html {
    font-size: 62.5%;
    box-sizing: border-box;
  }

  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
  }

  .calculator {
    border: 1px solid #ccc;
    border-radius: 5px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
  }

  .calculator-screen {
    width: 100%;
    height: 80px;
    border: none;
    background-color: #252525;
    color: #fff;
    text-align: right;
    padding-right: 20px;
    padding-left: 10px;
    font-size: 4rem;
  }

  button {
    height: 60px;
    font-size: 2rem !important;
  }

  .equal-sign {
    height: 98%;
    grid-area: 2 / 4 / 6 / 5;
  }

  .calculator-keys {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 20px;
    padding: 20px;
  }
</style>


<div class="container my-4">
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Calculator</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">


          <input type="text" class="calculator-screen z-depth-1" value="" disabled />

          <div class="calculator-keys">

            <button type="button" class="operator btn btn-info" value="+">+</button>
            <button type="button" class="operator btn btn-info" value="-">-</button>
            <button type="button" class="operator btn btn-info" value="*">&times;</button>
            <button type="button" class="operator btn btn-info" value="/">&divide;</button>

            <button type="button" value="7" class="btn btn-light waves-effect">7</button>
            <button type="button" value="8" class="btn btn-light waves-effect">8</button>
            <button type="button" value="9" class="btn btn-light waves-effect">9</button>


            <button type="button" value="4" class="btn btn-light waves-effect">4</button>
            <button type="button" value="5" class="btn btn-light waves-effect">5</button>
            <button type="button" value="6" class="btn btn-light waves-effect">6</button>


            <button type="button" value="1" class="btn btn-light waves-effect">1</button>
            <button type="button" value="2" class="btn btn-light waves-effect">2</button>
            <button type="button" value="3" class="btn btn-light waves-effect">3</button>


            <button type="button" value="0" class="btn btn-light waves-effect">0</button>
            <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
            <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

            <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>

          </div>
        </div>

      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>



<script>
  const calculator = {
    displayValue: '0',
    firstOperand: null,
    waitingForSecondOperand: false,
    operator: null,
  };

  function inputDigit(digit) {
    const {
      displayValue,
      waitingForSecondOperand
    } = calculator;

    if (waitingForSecondOperand === true) {
      calculator.displayValue = digit;
      calculator.waitingForSecondOperand = false;
    } else {
      calculator.displayValue = displayValue === '0' ? digit : displayValue + digit;
    }
  }

  function inputDecimal(dot) {
    // If the `displayValue` does not contain a decimal point
    if (!calculator.displayValue.includes(dot)) {
      // Append the decimal point
      calculator.displayValue += dot;
    }
  }

  function handleOperator(nextOperator) {
    const {
      firstOperand,
      displayValue,
      operator
    } = calculator
    const inputValue = parseFloat(displayValue);

    if (operator && calculator.waitingForSecondOperand) {
      calculator.operator = nextOperator;
      return;
    }

    if (firstOperand == null) {
      calculator.firstOperand = inputValue;
    } else if (operator) {
      const currentValue = firstOperand || 0;
      const result = performCalculation[operator](currentValue, inputValue);

      calculator.displayValue = String(result);
      calculator.firstOperand = result;
    }

    calculator.waitingForSecondOperand = true;
    calculator.operator = nextOperator;
  }

  const performCalculation = {
    '/': (firstOperand, secondOperand) => firstOperand / secondOperand,

    '*': (firstOperand, secondOperand) => firstOperand * secondOperand,

    '+': (firstOperand, secondOperand) => firstOperand + secondOperand,

    '-': (firstOperand, secondOperand) => firstOperand - secondOperand,

    '=': (firstOperand, secondOperand) => secondOperand
  };

  function resetCalculator() {
    calculator.displayValue = '0';
    calculator.firstOperand = null;
    calculator.waitingForSecondOperand = false;
    calculator.operator = null;
  }

  function updateDisplay() {
    const display = document.querySelector('.calculator-screen');
    display.value = calculator.displayValue;
  }

  updateDisplay();

  const keys = document.querySelector('.calculator-keys');
  keys.addEventListener('click', (event) => {
    const {
      target
    } = event;
    if (!target.matches('button')) {
      return;
    }

    if (target.classList.contains('operator')) {
      handleOperator(target.value);
      updateDisplay();
      return;
    }

    if (target.classList.contains('decimal')) {
      inputDecimal(target.value);
      updateDisplay();
      return;
    }

    if (target.classList.contains('all-clear')) {
      resetCalculator();
      updateDisplay();
      return;
    }

    inputDigit(target.value);
    updateDisplay();
  });
</script>