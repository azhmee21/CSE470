<?php
session_start();
require_once "../controller/db.php";
$sql = "SELECT * FROM products ORDER BY id  DESC";
$result = mysqli_query($conn, $sql);
$color=$_POST['color'];
$jwellery=$_POST['jwellery'];




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Template</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container-fluid">
    
        <div class="row min-vh-100">
            <div class="col-12">
                <header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 bg-dark py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto me-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="tel:+123-456-7890"><i class="fa fa-phone-square me-2"></i>+123-456-7890</a>
                                    </li>
                                    <li>
                                        <a href="mailto:mail@ecom.com"><i class="fa fa-envelope me-2"></i>mail@ecom.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <ul class="top-nav">
                                    
                                    <li>
                                        <a href="../controller/logout.php"><i class="fas fa-sign-in-alt me-2"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                    <a href="index.php">E-Commerce</a>
                                </div>
                            </div>
                            <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                                <form action="#">
                                    
                                </form>
                            </div>
                            <div class="col-lg-auto text-center text-lg-left header-item-holder">
                                
                                <a href="viewcart.php" class="header-item">
                                    <i class="fas fa-shopping-bag me-2"></i><span id="header-qty" class="me-3"><?php echo $_SESSION['cart']; ?></span>
                                    
                                </a>
                            </div>
                        </div>
                    <!-- Header -->

                </header>
            </div>
         
            <div class="col-12">
                <!-- Main Content -->
                <main class="row">

                    <!-- Slider -->
                    <div class="col-12 px-0">
                        <div id="slider" class="carousel slide w-100" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#slider" data-bs-slide-to="1"></li>
                                <li data-bs-target="#slider" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="images/slider-1.jpg" class="slider-img" style="height:500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider-2.jpg" class="slider-img" style="height:500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider-3.jpg" class="slider-img" style="height:500px;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- Slider -->
                      <!--Dropdown -->
                      
                      <!-- Dropdown -->
                    <!-- Featured Products -->
                    <div class="col-2 sticky-top">
                        <form action="index.php" method="post">
                           <span>Pearl color:</span>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="white" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   White
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="pink light" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault" >
                                 Pink Light
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="beige" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Beige
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="grey" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Grey
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="purple daste" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Purple Daste
                               </label>
                            </div>
                            
                            <span>Jwellery:</span>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="jwellery[]" value="necklace" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Necklace
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="jwellery[]" value="earring" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                  Earring
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="jwellery[]" value="bracelet" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                   Bracelet
                               </label>
                            </div>
                            <span>Color</span>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="gold" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                  Gold
                               </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="color[]" value="silver" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                  Silver
                               </label>
                            </div>
                            <span>Please select color</span><br />
                            <button type="submit" class="btn btn-secondary" name="search">Search</button>
                        </form>
                        
                    </div>
                    <div class="col-10">
                    
                            <div class="col-12 bg-white text-center h-100 product-item">
                           
                                <div class="row h-100">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-center text-uppercase">
                                        <h2>Featured Products</h2>
                                    </div>
                                </div>
                                <div class="col">
                                   
                                <div class="col-12">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10 py-3">
                                
                                <div class="row">
                                <?php
                                while ($rowSelect = mysqli_fetch_array($result))
                                {
                                   
                                    $title = $rowSelect ['title'];
                                    $content = $rowSelect ['content'];
                                    $price = $rowSelect ['price'];
                                    if(empty($jwellery)){
                                    ?>
                              
                                    <div class="col-lg-3 col-sm-6 my-3">
                                                <form action="../controller/cart.php" method="post">
                                                
                                                    <div class="col-12 bg-white text-center h-100 product-item">
                                                        <div class="row h-100">
                                                        <?php
                                                if($rowSelect['Latest']=='Yes'){
                                                ?>
                                                <span class="new">New</span>
                                                <?php
                                                }
                                                ?>
                                                            <div class="col-12 p-0 mb-3">
                                                                
                                            <input type="hidden" name="code" value="<?php echo $rowSelect ["id"]; ?>" />
                                             <img src="../controller/imageView.php?id=<?php echo $rowSelect ["id"]; ?>" style="max-height: 200px; w"/>
            
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                <?php echo $title; ?>
                                             </div>
                                                          
                                                                
                                                                
                                             <div class="col-12 mb-3">
                                                  <span class="product-price">
                                                      <?php echo $price ?>
                                                  </span>
                                             </div>
                                           <div class="col-12 mb-3 align-self-end">
                                           <button class="btn btn-outline-dark" type="submit" name="cart"><i class="fas fa-cart-plus me-2"></i>Add to cart</button>
                                          </div>
                                      </div>
                                    </div>
                                    </form>
                                  </div>
<?php
    }else{
  
?>
<?php
foreach($jwellery as $t){
    foreach($color as $v){
    if(($rowSelect['type']==$t && $rowSelect['color']==$v) ){

        ?>
        <div class="col-lg-3 col-sm-6 my-3">
                                                <form action="../controller/cart.php" method="post">
                                                    <div class="col-12 bg-white text-center h-100 product-item">
                                                        <div class="row h-100">
                                                            <div class="col-12 p-0 mb-3">
                                                                
                                            <input type="hidden" name="code" value="<?php echo $rowSelect ["id"]; ?>" />
                                             <img src="../controller/imageView.php?id=<?php echo $rowSelect ["id"]; ?>" style="max-height: 200px; w"/>
            
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                <?php echo $title; ?>
                                             </div>
                                                          
                                                                
                                                                
                                             <div class="col-12 mb-3">
                                                  <span class="product-price">
                                                      <?php echo $price ?>
                                                  </span>
                                             </div>
                                           <div class="col-12 mb-3 align-self-end">
                                           <button class="btn btn-outline-dark" type="submit" name="cart"><i class="fas fa-cart-plus me-2"></i>Add to cart</button>
                                          </div>
                                      </div>
                                    </div>
                                    </form>
                                  </div>
<?php
    }
}
}
    }
}
?>
                     
                                    <!-- Product -->

                                     
                                    

                                      
                                    
                    <!-- Featured Products -->

                   

                    <div class="col-12 py-3 bg-light d-sm-block d-none">
                        <div class="row">
                            <div class="col-lg-3 col ms-auto large-holder">
                                <div class="row">
                                    <div class="col-auto ms-auto large-icon">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                    <div class="col-auto me-auto large-text">
                                        Best Price
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col large-holder">
                                <div class="row">
                                    <div class="col-auto ms-auto large-icon">
                                        <i class="fas fa-truck-moving"></i>
                                    </div>
                                    <div class="col-auto me-auto large-text">
                                        Fast Delivery
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col me-auto large-holder">
                                <div class="row">
                                    <div class="col-auto ms-auto large-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="col-auto me-auto large-text">
                                        Genuine Products
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Main Content -->
            </div>

            <div class="col-12 align-self-end">
                <!-- Footer -->
                <footer class="row">
                    <div class="col-12 bg-dark text-white pb-3 pt-5">
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 text-center text-sm-left mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="footer-logo">
                                            <a href="index.php">E-Commerce</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <address>
                                            221B Baker Street<br>
                                            London, England
                                        </address>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-8 text-center text-sm-left mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12 text-uppercase">
                                        <h4>Who are we?</h4>
                                    </div>
                                    <div class="col-12 text-justify">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam imperdiet vel ligula vel sodales. Aenean vel ullamcorper purus, ac pharetra arcu. Nam enim velit, ultricies eu orci nec, aliquam efficitur sem. Quisque in sapien a sem vestibulum volutpat at eu nibh. Suspendisse eget est metus. Maecenas mollis quis nisl ac malesuada. Donec gravida tortor massa, vitae semper leo sagittis a. Donec augue turpis, rutrum vitae augue ut, venenatis auctor nulla. Sed posuere at erat in consequat. Nunc congue justo ut ante sodales, bibendum blandit augue finibus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-3 col-5 ms-lg-auto ms-sm-0 ms-auto mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12 text-uppercase">
                                        <h4>Quick Links</h4>
                                    </div>
                                    <div class="col-12">
                                        <ul class="footer-nav">
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="#">About Us</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 me-auto mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12 text-uppercase text-underline">
                                        <h4>Help</h4>
                                    </div>
                                    <div class="col-12">
                                        <ul class="footer-nav">
                                            <li>
                                                <a href="#">FAQs</a>
                                            </li>
                                            <li>
                                                <a href="#">Shipping</a>
                                            </li>
                                            <li>
                                                <a href="#">Returns</a>
                                            </li>
                                            <li>
                                                <a href="#">Track Order</a>
                                            </li>
                                            <li>
                                                <a href="#">Report Fraud</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 text-center text-sm-left">
                                <div class="row">
                                    <div class="col-12 text-uppercase">
                                        <h4>Newsletter</h4>
                                    </div>
                                    <div class="col-12">
                                        <form action="#">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Enter your email..." required>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-outline-light text-uppercase">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->
            </div>
        </div>

    </div>

    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
     $(function(){
    var requiredCheckboxes = $('.browsers :checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});
    </script>
</body>
</html>
