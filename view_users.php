<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>

 <div class="row"><!--row Begin-->
     <div class="col-lg-12"><!--col-lg-12 Begin-->
         <ol class="breadcrumb"><!--breadcrumb Begin-->
             <li class="active">
             
               <i class="fa fa-dashboard"></i> Dashboard / Pregledaj Korisnike
             
             </li>
         </ol><!--breadcrumb Finish-->
     </div><!--col-lg-12 Finish-->
 </div><!--row Finish-->

  <div class="row"><!--row Begin-->
      <div class="col-lg-12"><!--col-lg-12 Begin-->
          <div class="panel panel-default"><!--panel panel-default Begin-->
              <div class="panel-heading"><!--panel-heading Begin-->
               <h3 class="panel-title"><!--panel-title Begin-->
                <i class="fa fa-tags"></i> Pregledaj Korisnike
               </h3><!--panel-title Finish-->
              </div><!--panel-heading Finish-->
               
               <div class="panel-body"><!--panel-body Begin-->
                   <div class="table-responsive"><!--table-responsive Begin-->
                       <table class="table table-striped table-bordered table-hover"><!--table table-striped table-bordered table-hover Begin-->
                       
                        <thead><!--thead Begin-->
                            <tr><!--tr Begin-->
                                <th> No: </th>
                                <th> User Name: </th>
                                <th> User E-Mail: </th>
                                <th> User Job: </th>
                                <th> User Contact: </th>
                                <th> Edit: </th>
                                <th> Delete: </th>
                            </tr><!--tr Finish-->
                        </thead><!--thead Finish-->

                        <tbody><!--tbody Begin-->
                         <?php 
                         $i=0;

                         $get_users="select * from admins";

                         $run_users=mysqli_query($con,$get_users);

                         while($row_users=mysqli_fetch_array($run_users)){
                             $user_id=$row_users['admin_id'];
                             $user_name=$row_users['admin_name'];
                             $user_email=$row_users['admin_email'];
                             $user_job=$row_users['admin_job'];
                             $user_contact=$row_users['admin_contact'];
                             $i++;
                         ?>

                         <tr><!--tr Begin-->
                             <td> <?php echo $i;  ?> </td>
                             <td> <?php echo $user_name;  ?> </td>
                    
                             <td> <?php echo $user_email;  ?> </td>
                             <td> <?php echo $user_job;  ?> </td>
                             <td> <?php echo $user_contact;  ?> </td>
                             <td> 
                               <a href="index.php?user_profile=<?php echo $user_id; ?>">

                                <i class="fa fa-pencil"></i> Uredi
                             
                               </a> 
                             </td>
                            
                             <td> 
                               <a href="index.php?delete_user=<?php echo $user_id; ?>">

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