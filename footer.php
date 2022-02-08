<!-- footer -->
            <?php
            include('connect.php');
            $sql_footer = "select * from manage_website"; 
            $result_footer = $conn->query($sql_footer);
            $row_footer = mysqli_fetch_array($result_footer);
            ?>
            <?php //echo $row_footer['footer'];?>
            <div class="row pl-4 pr-4" style="background-color: #ededed; border-top: 2px solid #d9d9d9;">
                <div class="col-md-3">
                    <div class="card  p-20" style="background-color:#86aae3">
                        <a href="#myModal" data-toggle="modal">
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
                                    <p class="m-b-0">Calculator</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="card  p-20" style="background-color:#e3ba86d6">
                        <a href="profile.php">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                    <img src="icons/pro.png" width="100%" height="50px" alt="">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"></h2>
                                    <p class="m-b-0">Profile</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card  p-20" style="background-color:#9986e3ed">
                        <a href="changepassword.php">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                    <img src="icons/pas.png" width="100%" height="50px" alt="">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"></h2>
                                    <p class="m-b-0">Change Pasword</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card  p-20" style="background-color:#e38686">
                        <a href="logout.php">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <!-- <span><i class="ti-comment f-s-40"></i></span> -->
                                    <img src="icons/logout.png" width="100%" height="50px" alt="">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"></h2>
                                    <p class="m-b-0">Logout</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <footer class="footer"> © 2020 All rights reserved. Software Developed by <a href="#"><?php echo $row_footer['footer'];?></a></footer>  -->
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->  
    </div>

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

    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


 <script src="js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/sweetalert/sweetalert.init.js"></script>
   <!--  <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script> -->

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


   <!--  <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script> -->
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

   <!-- <script src="js/lib/sweetalert/sweetalert.min.js"></script>
     scripit init
    <script src="js/lib/sweetalert/sweetalert.init.js"></script> -->




     <!-- <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script> -->

     <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

 <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="js/lib/html5-editor/wysihtml5-init.js"></script>
</body>

</html>
<script>
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
                                        </script>
                                        <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>







<script>
    $(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>




 <!-- <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet"> -->
<?php //if(!empty($_SESSION['success'])) {  ?>
                <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <p><?php //echo $_SESSION['success']; ?></p>
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
 <?php //unset($_SESSION["success"]);  
//} ?>
<?php //if(empty($_SESSION['success'])) {  ?>
             <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                 <p><?php //echo $_SESSION['error']; ?></p>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
<?php //unset($_SESSION["error"]);  } ?>