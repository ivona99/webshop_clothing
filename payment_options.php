<div class="box"><!--box Begin -->
<?php

$session_name=$_SESSION['customer_name'];
$select_customer="select * from customers where customer_name='$session_name'";
$run_customer=mysqli_query($con,$select_customer);
$row_customer=mysqli_fetch_array($run_customer);
$customer_id=$row_customer['customer_id'];


?>
 
  <h1 class="text-center">Opcije plaćanja</h1>
  <center>
   <p class="lead"><!--lead text-center Begin -->
   
    <a href="order.php?c_id=<?php echo $customer_id  ?>">Offline Plaćnje
    <img src="images/offline.jpg" alt="img_offline" class="img-responsive">
    
    </a>
   
   </p><!--lead text-center Finish -->
   </center>

  <!-- <center>
    <p class="lead">
     <a href="#">
     
     Paypall Plaćanje
     <img src="images/paypall_img.png" alt="img_paypall" class="img-responsive">
     
     </a>
    
    
    </p>
   
   
   </center>
-->

</div><!--box Finish -->