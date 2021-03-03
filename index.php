<?php  
$active='Home';
include("includes/header.php");

?>
   
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                   <div class="item active">
                       
                       <img src="admin_area/slides_images/Shopping.webp" style="width:1100px; height:490px;" alt="Slider Image 1">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/Image.jpg" style="width:1100px; height:490px;" alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/djevojka.jpg" style="width:1100px; height:490px;" alt="Slider Image 3">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/Small-shopping.jpg" style="width:1100px; height:490px;" alt="Slider Image 4">
                       
                   </div>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
   <div id="advantages"> <!-- advantages begin -->
   
       <div class="container"> <!-- container Begin -->
      
         <div class="same-height-row"><!--same-height-row  Begin -->
       
           <div class="col-sm-4"><!--col-sm-4  Begin -->
       
              <div class="box same-height"><!--box same-height  Begin -->

                  <div class="icon"><!--icon  Begin -->
        
                   <i class="fa fa-heart"></i>
        
                  </div><!--icon  Finish -->

                  <h3><a href="#">We Love Our Customer</a></h3>

                  <p>We know to provide the best posible service ever. Customers are the reason we are all in business.</p>
        
               </div><!--box same-height  Finish -->
       
           </div><!--col-sm-4 Finish  -->

       <div class="col-sm-4"><!--col-sm-4  Begin -->
       
        <div class="box same-height"><!--box same-height  Begin -->

        <div class="icon"><!--icon  Begin -->
        
        <i class="fa fa-tag"></i>
        
        </div><!--icon  Finish -->

        <h3><a href="#">Best Price</a></h3>

        <p>Compare us with another site, who have the best prices.</p>
        
        </div><!--box same-height  Finish -->
       
       </div><!--col-sm-4 Finish  -->
       <div class="col-sm-4"><!--col-sm-4  Begin -->
       
        <div class="box same-height"><!--box same-height  Begin -->

        <div class="icon"><!--icon  Begin -->
        
        <i class="fa fa-thumbs-up"></i>
        
        </div><!--icon  Finish -->

        <h3><a href="#">100% Original Products</a></h3>

        <p>We just offer you the best and original products</p>
        
        </div><!--box same-height  Finish -->
       
       </div><!--col-sm-4 Finish  -->
      
      </div> <!--same-height-row  Finish -->
        
      </div> <!-- container Finish -->
   
   </div> <!-- advantages Finish -->

 <div id="hot"><!-- hot Begin -->

   <div class="box"><!-- box Begin -->

   <div class="container"><!--container  Begin -->

   <div class="col-md-12"><!--col-md-12  Begin -->

   <h2>
       Our Latest Products
   </h2>

   </div><!--col-md-12  Finish -->

   </div><!--container Finish -->

   </div><!-- box Finish -->

</div><!-- hot Finish -->
    
<div id="content" class="container"><!--container Begin -->

<div class="row"><!-- row Begin -->

<?php

getPro();

?>



</div><!-- row Finish -->

</div><!-- container Finish -->

<?php  
include("includes/footer.php");
?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>