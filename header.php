<?php session_start();
 include('connect.php');
    if(!isset($_SESSION["email"])){
    ?>
    <script>
    window.location="login.php";
    </script>
    <?php
    
} else { ?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-light" style="display: flex;flex-direction: row;justify-content: center;align-content: center;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <?php
                            $sql_header_logo = "select * from manage_website"; 
                            $result_header_logo = $conn->query($sql_header_logo);
                            $row_header_logo = mysqli_fetch_array($result_header_logo);
                        ?>
                        <b><img src="uploadImage/Logo/<?php echo $row_header_logo['logo'];?>" alt="homepage" class="dark-logo" style="width:50%;height:auto;"/></b>
                    </a>
                </div>
            </nav>
        </div>
<?php } ?>