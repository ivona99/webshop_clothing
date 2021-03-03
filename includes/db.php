<?php  
$errors = array();
$c_name = "";
$c_email    = "";
$con= mysqli_connect("localhost", "root", "", "ecom_store");
if(!$con){
    die('Conection failed : ' .mysqli_connect_error());
}

?>
