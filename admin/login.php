<?php  
session_start();
include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Clothing Store Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/loginn.css">
</head>
<body>
   
   <div class="container"><!--container Begin-->
       <form action="" class="form-login" method="post"><!--form-login Begin-->
           <h2 class="form-login-heading"> Admin Prijava </h2>
             
             <input type="text" class="form-control" placeholder="Name" name="admin_name" required>
             
             <input type="password" class="form-control" placeholder="Lozinka" name="admin_pass" required>

             <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!--btn btn-lg btn-primary btn-block Begin-->
               
               Prijava
             
             </button><!--btn btn-lg btn-primary btn-block Finish-->

       </form><!--form-login Finish-->
   </div><!--container Finish-->
    
</body>
</html>

<?php
 if(isset($_POST['admin_login'])){
     $admin_name=mysqli_real_escape_string($con, $_POST['admin_name']);
     $admin_pass=mysqli_real_escape_string($con, $_POST['admin_pass']);
     $get_admin="select * from admins where admin_name='$admin_name' AND admin_pass='$admin_pass'";
     $run_admin=mysqli_query($con,$get_admin);
     $count=mysqli_num_rows($run_admin);

     if($count==1){
         $_SESSION['admin_name']=$admin_name;
         echo "<script>alert('Prjavljeni ste. Dobrodošli!')</script>";
         echo "<script>window.open('index.php?dashboard','_self')</script>";

     }else{
        echo "<script>alert('Ime ili Lozinka nisu ispravni')</script>";
     }
     
 }

?>