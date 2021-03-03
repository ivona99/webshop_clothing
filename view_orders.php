<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>

 <div class="row"><!--row Begin-->
     <div class="col-lg-12"><!--col-lg-12 Begin-->
         <ol class="breadcrumb"><!--breadcrumb Begin-->
             <li class="active">
             
               <i class="fa fa-dashboard"></i> Dashboard / Pregledaj Narudžbe
             
             </li>
         </ol><!--breadcrumb Finish-->
     </div><!--col-lg-12 Finish-->
 </div><!--row Finish-->

  <div class="row"><!--row Begin-->
      <div class="col-lg-12"><!--col-lg-12 Begin-->
          <div class="panel panel-default"><!--panel panel-default Begin-->
              <div class="panel-heading"><!--panel-heading Begin-->
               <h3 class="panel-title"><!--panel-title Begin-->
                <i class="fa fa-tags"></i> Pregledaj Narudžbe
               </h3><!--panel-title Finish-->
              </div><!--panel-heading Finish-->
               
               <div class="panel-body"><!--panel-body Begin-->
                   <div class="table-responsive"><!--table-responsive Begin-->
                       <table class="table table-striped table-bordered table-hover"><!--table table-striped table-bordered table-hover Begin-->
                       
                        <thead><!--thead Begin-->
                            <tr><!--tr Begin-->
                                <th> Order No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                <th> Product Size: </th>
                                <th> Order Date: </th>
                                <th> Total Amount: </th>
                                <th> Status: </th>
                                <th> Delete: </th>
                            </tr><!--tr Finish-->
                        </thead><!--thead Finish-->

                        <tbody><!--tbody Begin-->
                         <?php 
                         $i=0;

                         $get_orders="select * from pending_orders";

                         $run_orders=mysqli_query($con,$get_orders);

                         while($row_orders=mysqli_fetch_array($run_orders)){
                             $order_id=$row_orders['order_id'];
                             $c_id=$row_orders['customer_id'];
                             $invoice_no=$row_orders['invoice_no'];
                             $product_id=$row_orders['product_id'];
                             $qty=$row_orders['qty'];
                             $size=$row_orders['size'];
                             $order_status=$row_orders['order_status'];
                             $get_products="select * from products where product_id='$product_id'";
                             $run_products=mysqli_query($con,$get_products);
                             $row_products=mysqli_fetch_array($run_products);
                             $product_title=$row_products['product_title'];
                             $get_customer="select * from customers where customer_id='$c_id'";
                             $run_customer=mysqli_query($con,$get_customer);
                             $row_customer=mysqli_fetch_array($run_customer);
                             $customer_name=$row_customer['customer_name'];
                             $get_c_order="select * from customer_orders where order_id='$order_id'";
                             $run_c_order=mysqli_query($con,$get_c_order);
                             $row_c_order=mysqli_fetch_array($run_c_order);
                             $order_date=$row_c_order['order_date'];
                             $order_amount=$row_c_order['due_amount'];

                             $i++;
                         ?>

                         <tr><!--tr Begin-->
                             <td> <?php echo $i;  ?> </td>
                             <td> <?php echo $customer_name;  ?> </td>
                             <td> <?php echo $invoice_no;  ?> </td>
                             <td> <?php echo $product_title;  ?> </td>
                             <td> <?php echo $qty;  ?> </td>
                             <td> <?php echo $size;  ?> </td>
                             <td><?php echo $order_date;  ?>  </td>
                             <td> <?php echo $order_amount;  ?> </td>
                             <td>
                             <?php 
                             
                             if($order_status=='pending'){
                                 echo $order_status='pending';
                             }else{
                                echo $order_status='complete';  
                             }
                             
                             ?>
                             
                             
                             </td>
                            
                             <td> 
                               <a href="index.php?delete_order=<?php echo $order_id; ?>">

                                <i class="fa fa-trash-o"></i> Izbriši
                             
                               </a> 
                             </td>
                         </tr><!--tr Finish-->

                         <?php } ?>
                        
                        
                        </tbody><!--tbody Finish-->
                       
                       </table><!--table table-striped table-bordered table-hover" Finish-->
                   </div><!--table-responsive Finish-->
               </div><!--panel-body Finish-->

          </div><!--panel panel-defaultFinish-->
      </div><!--col-lg-12 Finish-->
  </div><!--row Finish-->


<?php } ?>