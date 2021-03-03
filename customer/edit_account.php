<?php
$customer_session=$_SESSION['customer_name'];
$get_customer="select * from customers where customer_name='$customer_session'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$customer_id=$row_customer['customer_id'];
$customer_name=$row_customer['customer_name'];
$customer_email=$row_customer['customer_email'];



?>

<h1 align="center"> Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data"><!--form Begin-->
 
 <div class="form-group"><!--form-group Begin-->
 
 <label> Customer Name: </label>

 <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name; ?>" required>
 
 </div><!--form-group Finish-->

 <div class="form-group"><!--form-group Begin-->
 
 <label> Customer Email: </label>

 <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email; ?>" required>
 
 </div><!--form-group Finish-->

 <div class="text-center"><!--text-center Begin-->
 
 <button name="update" class="btn btn-primary"><!--btn btn-primary Begin-->
 
 <i class="fa fa-user-md"></i> Update Now
 
 </button><!--btn btn-primary Finish-->

 </div><!--text-center Finish-->

</form><!--form Finish-->

<?php

if(isset($_POST['update'])){
    $update_id=$customer_id;
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $update_customer="update customers set customer_name='$c_name', customer_email='$c_email' where customer_id='$update_id'";
    $run_customer=mysqli_query($con, $update_customer);

    if($run_customer){
        echo "<script>alert('Vaš račun je uređen, kako bi završili proces, trebate se ponovno logirati!')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    }
}


?>