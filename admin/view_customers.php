<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>

 <div class="row"><!--row Begin-->
     <div class="col-lg-12"><!--col-lg-12 Begin-->
         <ol class="breadcrumb"><!--breadcrumb Begin-->
             <li class="active">
             
               <i class="fa fa-dashboard"></i> Dashboard / Pregledaj Kupce
             
             </li>
         </ol><!--breadcrumb Finish-->
     </div><!--col-lg-12 Finish-->
 </div><!--row Finish-->

  <div class="row"><!--row Begin-->
      <div class="col-lg-12"><!--col-lg-12 Begin-->
          <div class="panel panel-default"><!--panel panel-default Begin-->
              <div class="panel-heading"><!--panel-heading Begin-->
               <h3 class="panel-title"><!--panel-title Begin-->
                <i class="fa fa-tags"></i> Pregledaj Kupce
               </h3><!--panel-title Finish-->
              </div><!--panel-heading Finish-->
               
               <div class="panel-body"><!--panel-body Begin-->
                   <div class="table-responsive"><!--table-responsive Begin-->
                       <table class="table table-striped table-bordered table-hover"><!--table table-striped table-bordered table-hover Begin-->
                       
                        <thead><!--thead Begin-->
                            <tr><!--tr Begin-->
                                <th> No: </th>
                                <th> Name: </th>
                                <th> E-Mail: </th>
                                <th> Delete: </th>
                            </tr><!--tr Finish-->
                        </thead><!--thead Finish-->

                        <tbody><!--tbody Begin-->
                         <?php 
                         $i=0;

                         $get_c="select * from customers";

                         $run_c=mysqli_query($con,$get_c);

                         while($row_c=mysqli_fetch_array($run_c)){
                             $c_id=$row_c['customer_id'];
                             $c_name=$row_c['customer_name'];
                             $c_email=$row_c['customer_email'];
                             $i++;
                         ?>

                         <tr><!--tr Begin-->
                             <td> <?php echo $i;  ?> </td>
                             <td> <?php echo $c_name;  ?> </td>
                    
                             <td> <?php echo $c_email;  ?> </td>
                            
                             <td> 
                               <a href="index.php?delete_customer=<?php echo $c_id; ?>">

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