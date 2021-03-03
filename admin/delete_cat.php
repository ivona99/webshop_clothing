<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<?php

if(isset($_GET['delete_cat'])){
    $delete_cat_id=$_GET['delete_cat'];

    $delete_cat="delete from categories where cat_id='$delete_cat_id'";

    $run_delete=mysqli_query($con,$delete_cat);

    if($run_delete){
        echo "<script>alert('Jedan od Vaših kategorija je izbrisan!')</script>";
        echo "<script>window.open('index.php?view_cats', '_self')</script>";
    }
}

?>


<?php  } ?>