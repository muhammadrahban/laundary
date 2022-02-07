<?php

session_start();
include("connect.php");

    //Add Item
if(isset($_POST['Add_To_Cart']))
{
    if(isset($_SESSION['cart']))
    {
        $myitems=array_column($_SESSION['cart'],'id');
        if(in_array($_POST['id'],$myitems))
        {

            echo"<script>alert('Item Already Added'); 
            window.location.href='sale.php';
            </script>";
        
    }
    else{

        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('id'=>$_POST['id'],'Item_Name'=>$_POST['name'],'Price'=>$_POST['price'],'Quantity'=>$_POST['qty'],'proqty'=>$_POST['proqty']);
       
        
        echo"<script>
        window.location.href='sale.php';
        </script>";
    }   

     
    }
    else
    {
        $_SESSION['cart'][0]=array('id'=>$_POST['id'],'Item_Name'=>$_POST['name'],'Price'=>$_POST['price'],'Quantity'=>$_POST['qty'],'proqty'=>$_POST['proqty']);
        
        
        echo"<script>
        window.location.href='sale.php';
        </script>";


    }
    
}


//Update Item Quantity
if(isset($_POST["update_quantity"]))
{
    
    foreach($_SESSION["cart"] as $key => $value)
    {
    
        if($value["id"]==$_POST["id"])
        {
            $_SESSION["cart"][$key]["Quantity"]=$_POST["update_quantity"];
            
                header("location:sale.php");
        }
    
    }
}


//Remove Item

if(isset($_POST['remove']))
{
    $id = $_POST['id'];

    foreach($_SESSION['cart'] as $key => $value)
    {
    
        if($value['id']==$id)
        {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo"<script>
          window.location.href='sale.php';
          </script>";
        }
    
    }
}



//Add Wishlist Item
if(isset($_POST['wishlist']))
{
    if(isset($_SESSION['wish']))
    {
        $myitems=array_column($_SESSION['wish'],'Item_Name');
        if(in_array($_POST['name'],$myitems))
        {

            echo"<script>alert('Item Already Added'); 
            window.location.href='wishlist.php';
            </script>";
        
    }
    else{

        $count=count($_SESSION['wish']);
        $_SESSION['wish'][$count]=array('Item_Name'=>$_POST['name'],'Price'=>$_POST['price'],'Quantity'=>$_POST['qty']);
        
        $amount = $_POST['price']*$_POST['qty'];
        mysqli_query($conn,"INSERT INTO `wish_list` VALUES (null,'$_POST[qty]','$amount','$_POST[price]','$_POST[name]','$_SESSION[id]')");
        
        echo"<script>
        window.location.href='wishlist.php';
        </script>";
    }   

     
    }
    else
    {
        $_SESSION['wish'][0]=array('Item_Name'=>$_POST['name'],'Price'=>$_POST['price'],'Quantity'=>$_POST['qty']);
        
        $amount = $_POST['price']*$_POST['qty'];
        mysqli_query($conn,"INSERT INTO `wish_list` VALUES (null,'$_POST[qty]','$amount','$_POST[price]','$_POST[name]','$_SESSION[id]')");
        
        echo"<script>
        window.location.href='wishlist.php';
        </script>";


    }
    
}


//Remove wishlist Item

if(isset($_POST['remove_wish']))
{
    $id = $_POST['id'];

    foreach($_SESSION['wish'] as $key => $value)
    {
    
        if($value['Item_Name']==$id)
        {
          unset($_SESSION['wish'][$key]);
          $_SESSION['wish']=array_values($_SESSION['wish']);
          echo"<script>
          window.location.href='wishlist.php';
          </script>";
        }
    
    }
}

//Update wishlist Item Quantity
if(isset($_POST["update_quantity_wish"]))
{
    
    foreach($_SESSION["wish"] as $key => $value)
    {
    
        if($value["Item_Name"]==$_POST["id"])
        {
            $_SESSION["wish"][$key]["Quantity"]=$_POST["update_quantity_wish"];
            
                header("location:wishlist.php");
        }
    
    }
}


//Update wishlist Item Quantity
if(isset($_POST["wish_update"]))
{
   $id = $_POST['id'];
   $qty = $_POST['wish_update'];

   $sql =  mysqli_query($conn,"select * from wish_list where id='$id'");
   $row = mysqli_fetch_assoc($sql);

  $amount = $row['price'] * $qty;

  $update =  mysqli_query($conn,"update wish_list set quantity='$qty',Amount='$amount' where id='$id'");
  
  header("location:wishlist.php");


}


//delete wishlist Item Quantity
if(isset($_POST["wish_del"]))
{
    $id = $_POST['id'];

    mysqli_query($conn,"delete from wish_list where id='$id'");
    
    header("location:wishlist.php");

}
?>