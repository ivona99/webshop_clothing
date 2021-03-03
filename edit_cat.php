<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>

<?php

if(isset($_GET['edit_cat'])){
    $edit_cat_id=$_GET['edit_cat'];

    $edit_cat_query= "select * from categories where cat_id='$edit_cat_id'";

    $run_edit=mysqli_query($con,$edit_cat_query);

    $row_edit=mysqli_fetch_array($run_edit);

    $cat_id= $row_edit['cat_id'];

    $cat_title= $row_edit['cat_title'];

    $cat_desc= $row_edit['cat_desc'];
}


?>

<div class="row"><!-- row 1 Begin-->
    <div class="col-lg-12"><!-- col-lg-12 Begin-->
        <ol class="breadcrumb"><!-- breadcrumb Begin-->
            <li>
            
             <i class="fa fa-dashboard"></i> Dashboard / Uredi Kategoriju 
            
            </li>
        </ol><!--breadcrumb Finish-->
    </div><!--col-lg-12 Finish-->
</div><!--row 1 Finish-->

 <div class="row"><!-- row 2 Begin-->
     <div class="col-lg-12"><!-- col-lg-12 Begin-->
         <div class="panel panel-default"><!-- panel panel-default Begin-->
             <div class="panel-heading"><!-- panel-heading Begin-->
                 <h3 class="panel-title"><!-- panel-title Begin-->

                   <i class="fa fa-pencil fa-fw"></i>  Uredi Kategoriju 

                 </h3><!--panel-title Finish-->
             </div><!--panel-heading Finish-->

             <div class="panel-body"><!-- panel-body Begin-->
                 <form action="" class="form-horizontal" method="post"><!-- form-horizontal Begin-->
                     <div class="form-group"><!-- form-group Begin-->
                       <label for="" class="control-label col-md-3"><!-- control-label col-md-3 Begin-->

                         Naslov Kategorije 

                       </label><!--control-label col-md-3 Finish-->
                         
                         <div class="col-md-6"><!--"col-md-6 Begin-->
                           <input value="<?php echo $cat_title; ?>" name="cat_title" type="text" class="form-control">
                        </div><!--"col-md-6 Finish-->

                     </div><!--form-group Finish-->

                     <div class="form-group"><!-- form-group Begin-->
                       <label for="" class="control-label col-md-3"><!-- control-label col-md-3 Begin-->

                         Opis Kategorije

                       </label><!--control-label col-md-3 Finish-->
                         
                         <div class="col-md-6"><!--"col-md-6 Begin-->
                           <textarea  type='text' name="cat_desc"  class="form-control"><?php echo $cat_desc; ?></textarea>
                        </div><!--"col-md-6 Finish-->

                     </div><!--form-group Finish-->

                     <div class="form-group"><!-- form-group Begin-->
                       <label for="" class="control-label col-md-3"><!-- control-label col-md-3 Begin-->

                         

                       </label><!--control-label col-md-3 Finish-->
                         
                         <div class="col-md-6"><!--"col-md-6 Begin-->
                           <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        </div><!--"col-md-6 Finish-->

                     </div><!--form-group Finish-->

                 </form><!--form-horizontal Finish-->
             </div><!--panel-body Finish-->

         </div><!--panel panel-default Finish-->
     </div><!--col-lg-12 Finish-->
 </div><!--row 2 Finish-->

 <?php
  if(isset($_POST['update'])){
      $cat_title=$_POST['cat_title'];

      $cat_desc=$_POST['cat_desc'];

      $update_cat="update categories set cat_title='$cat_title', cat_desc='$cat_desc' where cat_id='$cat_id'";

      $run_cat=mysqli_query($con,$update_cat);

      if($run_cat){
          echo "<script>alert('Vaša Kategorija je uspješno ažurirana')</script>";
          echo "<script>window.open('index.php?view_cats','_self')</script>";
      }

  }
 
 
 ?>




<?php  }  ?>