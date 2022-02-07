<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laundary_db";




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

class Act {
    public $activity_name;
    public $user_name;
    public $user_role;
    public $user_PC;
    public $adate;
    
  
    function __construct($activity_name, $user_name,$user_role,$user_PC,$date) {
      $this->activity_name = $activity_name;
      $this->user_name = $user_name;
      $this->user_role = $user_role;
      $this-> user_PC = $user_PC;
      $this->adate = $date;
    
    }
    


    function actt(){

        include("connect.php");
        mysqli_query($conn,"insert into activity values(null,'$this->activity_name','$this->user_name','$this->user_role','$this->user_PC','$this->adate')");
    }
  }




?>