<?php
    include('../connect.php');
    $p_name = $_GET['name'];
    $stock = "select p.id,s.p_name,s.per_price,s.qtn from tbl_stock as s,products as p WHERE `p_name`='".$p_name."' and p.id=s.p_id"; 
    $query4=$conn->query($stock);
    $row4=mysqli_fetch_row($query4);
    print_r(json_encode($row4));

?>