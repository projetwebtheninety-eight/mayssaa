<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['login_user']) and $_SESSION['login_user']=="mayssa"){
?>
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:21:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>La caverne</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bakery-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  </head>
  <body>
    <div class="ps-search">
      <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
        <form class="ps-form--search-2" action="http://warethemes.com/html/bready/do_action" method="post">
          <h3>Enter your keyword</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="">
            <button class="ps-btn active ps-btn--fullwidth">Search</button>
          </div>
        </form>
      </div>
    </div>
    <!-- header-->
    <header class="header header--3" data-sticky="false">
      <div class="header__top">
        <div class="ps-container">
          <div class="left">
            <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
          </div>
          <div class="right">
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"> USD</a></li>
                <li><a href="#"> SGD</a></li>
                <li><a href="#">JPN</a></li>
              </ul>
            </div>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Japanese</a></li>
              </ul>
            </div>
            <ul class="ps-list--social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="homepage-3.html"><img src="images/logo-light.jpg" alt=""></a>
          <div class="menu-toggle"><span></span></div>
          <div class="header__actions"><a class="ps-search-btn" href="#"><i class="ba-magnifying-glass"></i></a><a href="#"><i class="ba-profile"></i></a>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ba-shopping"></i></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Kingsman</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/2.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Joseph</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/3.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span>36</span></p>
                  <p>Item Total:<span>£528.00</span></p>
                </div>
                <div class="ps-cart__footer"><a href="cart.html">Check out</a></div>
              </div>
            </div>
          </div>
          <ul class="menu">
            <li class="menu-item-has-children"><a href="#">Homepage</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="index-2.html">Homepage 1</a></li>
                <li><a href="homepage-2.html">Homepage 2</a></li>
                <li><a href="homepage-3.html">Homepage 3</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="menu-item-has-children"><a href="product-listing.html">product</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="product-listing.html">Product List</a></li>
                <li><a href="product-detail.html">Product Detail</a></li>
                <li><a href="order-form.html">Order Form</a></li>
              </ul>
            </li>
            <li class="current-menu-item menu-item-has-children"><a href="about.html">Pages</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="menu.html">Menu</a></li>
                <li><a href="cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="whishlist.html">Whishlist</a></li>
                <li><a href="compare.html">Compare</a></li>
                <li><a href="404-page.html">Page 404</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="blog-grid.html">Blogs</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="blog-grid.html">Blog Grid</a></li>
                <li class="menu-item-has-children"><a href="blog-list.html">Blog Listing</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                  <ul class="sub-menu">
                    <li><a href="blog-list.html">Blog List Has Sidebar</a></li>
                    <li><a href="blog-list.html">Blog List No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="blog-detail.html">Blog Detail</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h1>Checkout</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Checkout</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-checkout pt-40 pb-40">
      <div class="ps-container">
        <form class="ps-form--checkout" action="ajoutLivraison.php" method="post">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__billing">
                <h3>Passer une livraison</h3>
                <div class="form-group form-group--inline">
                      <label>Réfèrence<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="ref" type="number">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Nom<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="nom" type="text">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Prénom<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="prenom" type="text">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>E-Mail<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="mail" type="email">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Télèphone<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="numtel" type="number">
                      </div>
                    </div>
                    
                    <div class="form-group form-group--inline">
                      <label>Ville<span>*</span>
                      </label>

                      <div class="form-group__content">
                        <select class="form-control" name="ville" type="text">
                         <option> Tunis</option>
                         <option> Zaghoun</option>
                         <option> Manouba</option>
                         <option> Sfax</option>
                         <option> Gébes</option>
                         <option> Gafsa</option>
                         <option> Souse</option>
                         <option> Béja</option>
                         <option> Bizerte</option>
                         <option> Ben Arous</option>
                         <option> Jandouba</option>
                         <option> Kairaoun</option>
                         <option> Gbéli</option>
                         <option> Kéf</option>
                         <option> Mehdia</option>
                         <option> Mounastir</option>
                         <option> Mednin</option>
                         <option> Silena</option>
                         <option> Tataouin</option>
                         <option> Touzeur</option>
                         <option> Kasserine</option>
                            </select>            
                                    
                      </div>
                    </div>
                    <td>Etat</td>

                    
                    <div class="form-group form-group--inline">
                      <label>Adresse<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="adresse" type="text">
                      </div>
                    </div>
                    
                    <div class="form-group form-group--inline">
                      <label>Code postal<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="codepostal" type="number">
                      </div>
                    </div>
             
                    <div class="form-group form-group--inline">
                      <label>Livreur<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <select class="form-control" name="livreur" id="exampleSelectGender" >
  //Il ne manque pas quelque chose dans ton select ? Genre le nom du champs ?
<?php
$db = mysql_connect('localhost', 'root', '') or exit(mysql_error());// on sélectionne la base
mysql_select_db('test',$db) or exit(mysql_error());
 
 
$sql = "SELECT nom FROM livreur";
$res = mysql_query($sql) or exit(mysql_error());
while($data=mysql_fetch_array($res)) {
   echo '<option>'.$data["nom"].'</option><br/>'; //Attention à ne pas oublier le . qui sert à concaténer ton expression
}
 
// on ferme la connexion à mysql
mysql_close(); //Facultatif, source de bug sur certaines versions de Wamp
?>
   
</select>

                      </div>
                    </div>

                    <button class="ps-btn ps-btn--fullwidth ps-btn--yellow">ORDER NOW</button>
                   
               
                
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__order">
                <header>
                  <h3>Your Order</h3>
                </header>
                <div class="content">
                  <table class="table ps-checkout__products">
                    <thead>
                      <tr>
                        <th class="text-uppercase">Product</th>
                        <th class="text-uppercase">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>HABITANT x1</td>
                        <td>$300.00</td>
                      </tr>
                      <tr>
                        <td>Card Subtitle</td>
                        <td>$300.00</td>
                      </tr>
                      <tr>
                        <td>Order Total</td>
                        <td>$300.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <footer>
                  <h3>Methode de paiement</h3>
                  <div class="form-group cheque">
                    <div class="ps-radio ps-radio--small">
                      <input class="form-control" type="radio" id="rdo01" name="payment" checked>
                      <label for="rdo01">Cheque Payment</label>
                    </div>
                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                  </div>
                  <div class="form-group paypal">
                    <div class="ps-radio ps-radio--small">
                      <input class="form-control" type="radio" name="payment" id="rdo02">
                      <label for="rdo02">Paypal</label>
                    </div>
                    <ul class="ps-payment-method">
                      <li><a href="#"><img src="images/payment/1.png" alt=""></a></li>
                      <li><a href="#"><img src="images/payment/2.png" alt=""></a></li>
                      <li><a href="#"><img src="images/payment/3.png" alt=""></a></li>
                    </ul>
                    
                  </div>
                </footer>
              </div>
              
            </div>
          </div>
        </form>
      </div>
    </div>
    
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="ps-site-features">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-delivery-truck-2"></i>
              <h4>Free Shipping <span> On Order Over$199</h4>
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-biscuit-1"></i>
              <h4>Master Chef<span> WITH PASSION</h4>
              <p>Shop zillions of finds, with new arrivals added daily.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-flour"></i>
              <h4>Natural Materials<span> protect your family</h4>
              <p>We always ensure the safety of all products of store</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-cake-3"></i>
              <h4>Attractive Flavor <span>ALWAYS LISTEN</span></h4>
              <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   <footer class="ps-footer">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-site-info"><a class="ps-logo" href="index-2.html"><img src="images/logo-dark.jpg" alt=""></a>
                
                <ul class="ps-list--social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <form class="ps-form--subscribe-offer" action="http://warethemes.com/html/bready/do_action" method="post">
                <h4>Get news & offer</h4>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Your Email...">
                  <button>Subscribe</button>
                </div>
                <p>* Don't worry, we never spam</p>
              </form>
              <div class="ps-footer__contact">
                
                <p>5,Rue de la Libye</p>
                <p>2000-Le Bardo-Tunisie</p>
                <P>(+216) 58566444</P>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-footer__open">
                <h4>Heure d'ouverture</h4>
                <p>
                  Lundi - Jeudi: <br>08h00  - 21h30  <br>
                  Vendredi - Samedi:<br>
                  08h00 - 23h00 
                </p>
              </div>
              <ul class="ps-list--payment">
                <li><a href="#"><img src="images/payment-method/visa.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/master-card.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/paypal.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-footer__copyright">
        <div class="container">
          <p>
            ©  Copyright by <strong>La caverne à gouter</strong></p>
        </div>
      </div>
    </footer>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="ps-loading">
      <div class="rectangle-bounce">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <!-- Plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/jquery.waypoints.min.js"></script>
    <script src="plugins/jquery.countTo.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>
<?php
}
else{
    header("location: login.php"); 
   
}
?>
<!-- Mirrored from warethemes.com/html/bready/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:23:43 GMT -->
</html>