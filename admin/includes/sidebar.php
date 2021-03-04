<?php


if(!isset($_SESSION['admin_name'])){
    echo "<script>window.open('login.php','_self')</script>";
}else{

?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!--navbar navbar-inverse navbar-fixed-top Begin-->
    <div class="navbar-header"><!--navbar-header Begin-->
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!--navbar-toggle Begin-->
      
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      
      </button><!--navbar-toggle Finish-->

      <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
    
    </div><!--navbar-header Finish-->

    <ul class="nav navbar-right top-nav"><!--nav navbar-right top-nav Begin-->
      
      <li class="dropdown"><!--dropdown Begin-->
      
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!--dropdown-toggle Begin-->
        
        <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>
       
       </a><!--dropdown-toggle Finish-->

        <ul class="dropdown-menu"><!--dropdown-menu Begin-->
            <li><!-- li Begin-->
              <a href="index.php?user_profile=<?php echo $admin_id; ?>"><!--a href Begin-->
                 <i class="fa fa-fw fa-user"></i> Profil
               </a><!-- a href Finish-->
            </li><!--li Finish-->

            <li><!-- li Begin-->
              <a href="index.php?view_products"><!--a href Begin-->
                 <i class="fa fa-fw fa-envelope"></i> Proizvodi
                 <span class="badge"> <?php echo $count_products; ?> </span>
              </a><!-- a href Finish-->
            </li><!--li Finish-->

           <li>
              <a href="index.php?view_customers">
                <i class="fa fa-fw fa-users"></i> Kupci
                <span class="badge"> <?php echo $count_customers; ?> </span>
              </a>
            </li>

            <li><!-- li Begin-->
              <a href="index.php?view_cats"><!--a href Begin-->
                <i class="fa fa-fw fa-gear"></i> Kategorije proizvoda
                <span class="badge"> <?php echo $count_p_categories; ?> </span>
              </a><!-- a href Finish-->
            </li><!--li Finish-->

            <li class="divider"></li>

            <li><!-- li Begin-->
              <a href="logout.php"><!--a href Begin-->
                <i class="fa fa-fw fa-power-off"></i> Odjava
              </a><!-- a href Finish-->
            </li><!--li Finish-->


        </ul><!--dropdown-menu Finish-->
      
      </li><!--dropdown Finish-->
    
    </ul><!--nav navbar-right top-nav Finish-->
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Begin-->
        <ul class="nav navbar-nav side-nav"><!--nav navbar-nav side-nav  Begin-->
            <li><!-- li Begin-->
            <a href="index.php?dashboard"><!--a href Begin-->
                <i class="fa fa-fw fa-dashboard"></i> Dashboard
              </a><!-- a href Finish-->
            </li><!--li Finish-->

            <li><!-- li Begin-->
            <a href="#" data-toggle="collapse" data-target="#products"><!--a href Begin-->
                <i class="fa fa-fw fa-tag"></i> Proizvodi
                <i class="fa fa-fw fa-caret-down"></i> 
              </a><!-- a href Finish-->
               
               <ul id="products" class="collapse"><!-- collapse Begin-->
                   <li><!-- li Begin-->
                     <a href="index.php?insert_product"> Unesi Proizvod </a>
                    </li><!--li Finish-->
                    <li><!-- li Begin-->
                     <a href="index.php?view_products"> Pregledaj Proizvod </a>
                   </li><!--li Finish-->
               </ul><!-- collapse Finish-->

            </li><!--li Finish-->

            <li><!-- li Begin-->
            <a href="#" data-toggle="collapse" data-target="#p_cat"><!--a href Begin-->
                <i class="fa fa-fw fa-edit"></i> Kategorije Proizvoda
                <i class="fa fa-fw fa-caret-down"></i> 
              </a><!-- a href Finish-->
               
               <ul id="p_cat" class="collapse"><!-- collapse Begin-->
                   <li><!-- li Begin-->
                     <a href="index.php?insert_p_cat"> Unesi Kategoriju Proizvoda </a>
                     </li><!--li Finish-->
                    <li><!-- li Begin-->
                     <a href="index.php?view_p_cats"> Pregledaj Kategoriju Proizvoda </a>
                   </li><!--li Finish-->
               </ul><!-- collapse Finish-->

            </li><!--li Finish-->

            <li><!-- li Begin-->
            <a href="#" data-toggle="collapse" data-target="#cat"><!--a href Begin-->
                <i class="fa fa-fw fa-book"></i> Kategorije 
                <i class="fa fa-fw fa-caret-down"></i> 
              </a><!-- a href Finish-->
               
               <ul id="cat" class="collapse"><!-- collapse Begin-->
                   <li><!-- li Begin-->
                     <a href="index.php?insert_cat"> Unesi Kategoriju </a>
                     </li><!--li Finish-->
                    <li><!-- li Begin-->
                     <a href="index.php?view_cats"> Pregledaj Kategoriju </a>
                   </li><!--li Finish-->
               </ul><!-- collapse Finish-->
            </li><!--li Finish-->

            <li><!-- li Begin-->
              <a href="index.php?view_customers"><!--a href Begin-->
                 <i class="fa fa-fw fa-users"></i> Pregledaj Kupce
              </a><!-- a href Finish-->
            </li><!--li Finish-->

            <li><!-- li Begin-->
              <a href="index.php?view_orders"><!--a href Begin-->
                 <i class="fa fa-fw fa-book"></i> Pregledaj Narudžbe
              </a><!-- a href Finish-->
            </li><!--li Finish-->

            <li><!-- li Begin-->
              <a href="index.php?view_payments"><!--a href Begin-->
                 <i class="fa fa-fw fa-money"></i> Pregledaj Plaćanje
              </a><!-- a href Finish-->
            </li><!--li Finish-->

           
            <li><!-- li Begin-->
              <a href="logout.php"><!--a href Begin-->
                 <i class="fa fa-fw fa-power-off"></i> Odjava
              </a><!-- a href Finish-->
            </li><!--li Finish-->

        </ul><!-- nav navbar-nav side-nav Finish-->
    </div><!--collapse navbar-collapse navbar-ex1-collapse Finish-->

</nav><!--navbar navbar-inverse navbar-fixed-top Finish-->

<?php } ?>