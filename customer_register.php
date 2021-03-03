<?php  
$active='Account';
include("includes/header.php");

?>
 <div class="content">
      <!-- notification message -->
       <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
   <?php endif ?>
<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin-->
        
        <ul class="breadcrumb"><!--breadcrumb  Begin -->
            <li>
            <a href="index.php">Home</a>
            </li>
            <li>
              Register
            </li>
        </ul><!--breadcrumb  Finish -->
        </div><!-- col-md-12 Finish-->

        <div class="col-md-3"><!--col-md-3 Begin -->
        <?php  
include("includes/sidebar.php");
?>

</div><!--col-md-3  Finish -->

<div class="col-md-9"><!--col-md-9 Begin -->
  
  <div class="box"><!--box Begin -->
  
    <div class="box-header"><!--box-header Begin -->
    
    <center><!--center Begin -->
    
    <h2> Kreiraj novi korisnički račun </h2>

    
    </center><!--center Finish -->

    <form action="customer_register.php" method="post" enctype="multipart/form-data"><!--form Begin -->
    


      <div class="form-group"><!--form-group Begin -->
      
      <label> Ime </label>
      <?php include('errors.php'); ?>
      <input type="text" class="form-control" name="c_name" value="<?php echo $c_name; ?>" required>
      
      
      </div><!--form-group Finish -->

      <div class="form-group"><!--form-group Begin -->

      <label> Email </label>
      <?php include('errors.php'); ?>
      <input type="text" class="form-control" name="c_email" value="<?php echo $c_email; ?>" required>
     

      </div><!--form-group Finish -->
      <div class="form-group"><!--form-group Begin -->
      
      <label> Lozinka </label>
      <input type="password" class="form-control" name="c_pass"  required>
      
      </div><!--form-group Finish -->

      

      <div class="text-center"><!--text-center Begin -->
      
      <button type="submit" name="register" class="btn btn-primary">
      <i class="fa fa-user-md"></i> Registriraj
      
      
      </button>
      
      </div><!--text-center Finish -->

    </form><!--form Finish -->
    
    </div><!--box-header Finish -->
  
  </div><!--box Finish -->

</div><!--col-md-9  Finish -->

</div><!-- container Finish -->
</div><!-- #content Begin -->



   <?php  
include("includes/footer.php");
?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>

<?php 
if(isset($_POST['register'])){
 
  $c_name= $_POST['c_name'];

  $c_email=$_POST['c_email'];

  $c_pass=$_POST['c_pass'];

  $c_ip=getRealIpUser();

  $korisnik_check_query = "SELECT * FROM customers WHERE customer_name='$c_name' OR customer_email='$c_email' LIMIT 1";
    $result = mysqli_query($con, $korisnik_check_query);
    $korisnik = mysqli_fetch_assoc($result);
    
   if ($korisnik) { // if user exists
      if ($korisnik['customer_name'] === $c_name) {
        array_push($errors, "username already exist");
        echo "<script> alert('username already exist')</script>";
       
      }
  
      if ($korisnik['customer_email'] === $c_email) {
        array_push($errors, "email already exist");
        echo "<script> alert('email already exist')</script>";
        
     }
    }
    if (count($errors) == 0) {

  $insert_customer="insert into customers (customer_name, customer_email, customer_pass, customer_ip) values('$c_name','$c_email', '$c_pass', '$c_ip')";

  $run_customer=mysqli_query($con,$insert_customer);
  $_SESSION['ime'] = $ime;
  $_SESSION['success'] = "";

  $sel_cart="select * from cart where ip_add='$c_ip'";

  $run_cart=mysqli_query($con,$sel_cart);

  $check_cart=mysqli_num_rows($run_cart);

  if($check_cart>0){
    /// ako je registriran sa stavkama u kosari///
    $_SESSION['customer_email']=$c_email;
    $_SESSION['customer_name']=$c_name;
    
    echo "<script> alert('Uspjesno ste se registrirali!')</script>";

    echo "<script> window.open('checkout.php','_self')</script>";
  }else{
    /// Ako je registriran bez stavki u kosari ///
    $_SESSION['customer_email']=$c_email;
    $_SESSION['customer_name']=$c_name;
    $_SESSION['success'] = "";

    echo "<script> alert('Uspjesno ste se registrirali!')</script>";

    echo "<script> window.open('index.php','_self')</script>";
  }
}
}



?>