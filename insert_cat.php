<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<div class="row"><!-- row 1 Begin-->
    <div class="col-lg-12"><!-- col-lg-12 Begin-->
        <ol class="breadcrumb"><!-- breadcrumb Begin-->
            <li>
            
             <i class="fa fa-dashboard"></i> Dashboard / Unesi Kategoriju 
            
            </li>
        </ol><!--breadcrumb Finish-->
    </div><!--col-lg-12 Finish-->
</div><!--row 1 Finish-->

<div class="row"><!-- row 2 Begin-->
     <div class="col-lg-12"><!-- col-lg-12 Begin-->
         <div class="panel panel-default"><!-- panel panel-default Begin-->
             <div class="panel-heading"><!-- panel-heading Begin-->
                 <h3 class="panel-title"><!-- panel-title Begin-->

                   <i class="fa fa-money fa-fw"></i>  Unesi Kategoriju 

                 </h3><!--panel-title Finish-->
             </div><!--panel-heading Finish-->

             <div class="panel-body"><!-- panel-body Begin-->
                 <form action="" class="form-horizontal" method="post"><!-- form-horizontal Begin-->
                     <div class="form-group"><!-- form-group Begin-->
                       <label for="" class="control-label col-md-3"><!-- control-label col-md-3 Begin-->

                         Naslov Kategorije 

                       </label><!--control-label col-md-3 Finish-->
                         
                         <div class="col-md-6"><!--"col-md-6 Begin-->
                           <input name="cat_title" type="text" class="form-control">
                        </div><!--"col-md-6 Finish-->

                     </div><!--form-group Finish-->

                     <div class="form-group"><!-- form-group Begin-->
                       <label for="" class="control-label col-md-3"><!-- control-label col-md-3 Begin-->

                         Opis Kategorije

                       </label><!--control-label col-md-3 Finish-->
                         
                         <div class="col-md-6"><!--"col-md-6 Begin-->
                           <textarea type='text' name="cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div><!--"col-md-6 Finish-->

                     </div><!--form-group Finish-->

                     <div class="form-group"><!-- form-group Begin-->
                       <label for="" class="control-label col-md-3"><!-- control-label col-md-3 Begin-->

                         

                       </label><!--control-label col-md-3 Finish-->
                         
                         <div class="col-md-6"><!--"col-md-6 Begin-->
                           <input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
                        </div><!--"col-md-6 Finish-->

                     </div><!--form-group Finish-->

                 </form><!--form-horizontal Finish-->
             </div><!--panel-body Finish-->

         </div><!--panel panel-default Finish-->
     </div><!--col-lg-12 Finish-->
 </div><!--row 2 Finish-->

 <?php
  if(isset($_POST['submit'])){
      $cat_title=$_POST['cat_title'];

      $cat_desc=$_POST['cat_desc'];

      $insert_cat="insert into categories (cat_title, cat_desc) values ('$cat_title', '$cat_desc')";

      $run_cat=mysqli_query($con,$insert_cat);

      if($run_cat){
          echo "<script>alert('Vaša nova kategorija je unesena!')</script>";
          echo "<script>window.open('index.php?view_cats','_self')</script>";
      }
  }
 
 
 ?>

<?php } ?>