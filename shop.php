<?php  
$active='Shop';
include("includes/header.php");

?>
<head>
<style>
.img-responsive{
    width:480px;
    height:430px;
}


</style>

</head>

<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin-->
        
        <ul class="breadcrumb"><!--breadcrumb  Begin -->
            <li>
            <a href="index.php">Home</a>
            </li>
            <li>
              Shop
            </li>
        </ul><!--breadcrumb  Finish -->
        </div><!-- col-md-12 Finish-->

        <div class="col-md-3"><!--col-md-3 Begin -->
        <?php  
include("includes/sidebar.php");
?>

</div><!--col-md-3  Finish -->


<div class="col-md-9"><!-- col-md-9 Begin -->
<?php
if(!isset($_GET['p_cat'])){
    if(!isset($_GET['cat'])){

echo "
    <div class='box'><!-- box Begin -->
        <h1>Shop</h1>
        <p>
        
        </p>
    </div><!--box  Finish -->
    ";

    }

}
?>

    <div class="row"><!-- row Begin -->
    <?php
    if(!isset($_GET['p_cat'])){
    if(!isset($_GET['cat'])){  

        $per_page=6;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
                $page=1;
            
            $start_from=($page-1) * $per_page;
            $get_products="select * from products order by 1 ASC LIMIT $start_from,$per_page";
            $run_products=mysqli_query($con,$get_products);
            while($row_products=mysqli_fetch_array($run_products)){
                $pro_id=$row_products['product_id'];
                $pro_title=$row_products['product_title'];
                $pro_price=$row_products['product_price'];
                $pro_img1=$row_products['product_img1'];

                echo "
                <div class='col-md-4 col-sm-6-responsive'>
                 <div class='product'>
                  <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive'  src='admin_area/product_images/$pro_img1'>
                  </a>
                   <div class='text'>
                   <h3>
                   <a href='details.php?pro_id=$pro_id'> $pro_title</a>
                   </h3>
                   <p class='price'>
                   KM $pro_price
                   </p>

                   <p class='button'>
                   <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                   View Details
                   </a>
                   <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                   <i class='fa fa-shopping-cart'></i> Add To Cart
                   </a>
                   
                   </p>
                   
                   </div>

                 </div>
                </div>
            
                
                ";

            }
        }
    
    ?>
    </div><!--row  Finish -->

    <center>
      
        <?php
        }
    }
    ?>

    </center>

    
    <?php 
    getpcatpro();
    getcatpro();
    
    ?>
    
   

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