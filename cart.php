<?php
require 'config/db-config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="css/mainheader.css">
  <link rel="stylesheet" type="text/css" href="css/mainfooter.css">
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  



</head>
<body>
  <!--...................... Header .................................... -->  
     <!-- '.' = start        '|' = end -->
    <!--...................... Header .................................... -->  
    <header class="main-header">

        <div id="head-mid">
            <div class="container-fluid" id="sec-row">
                <div class="row">
                    <div class="main-cols col-md-3">
                        <a class="main-brand" href="home.php" id="brand">
                            <img alt="Brand" class="img img-responsive" src="test1_white.png">
                        </a>
                    </div>
                    <div class="main-cols col-md-9">
                        <div class="row">
                            <div class="col-md-6 col-sm-9 col-xs-12 head-category">
                                <nav>
                                <a href="index.php"><span class="fa fa fa-home"></span> Home</a>
                                <a href="keyboard.php"><span class="fa fa fa-keyboard-o"></span> Keyboard</a>
                                <a href="mouse.php"><span class="fa fa fa-mouse-pointer"></span> Mouse</a>
                                <a href="headset.php"><span class="fa fa fa-headphones"></span> Headset</a>
                                <a href="console.php"><span class="fa fa fa-gamepad"></span> Console</a>
                                </nav>
                            </div>
                            <nav class="col-md-6 col-sm-3 col-xs-12">
                                <ul class="main-acount-nav nav nav-justified nav-pills">
                                    <?php 
                                    session_start();
                                    if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE && $_SESSION['email'] == "admin@admin.com"){ ?>

                                    <li class="header-btn" role="presentation">
                                        <a href="additem.php">
                                            <span class="fa fa-fw fa-plus"></span>
                                            <span class="menu-text ">Add New Item</span>
                                        </a>
                                    </li>

                                    <li class="header-btn" role="presentation">
                                        <a href="#">
                                            <span class="fa fa-fw fa-user"></span>
                                            <span class="menu-text "><?=$_SESSION['email']?></span>
                                        </a>
                                    </li>

                                    <li class="header-btn" role="presentation">
                                        <a href="processor/logoutuser.php">
                                            <span class="fa fa-fw fa-sign-out"></span>
                                            <span class="menu-text ">Log Out</span>
                                        </a>
                                    </li>

                                    <?php 
                                }

                                elseif (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE) {?>
                                <li class="header-btn" role="presentation">
                                    <a href="cart.php">
                                        <span class="fa fa-fw fa-shopping-cart"></span>
                                        <span class="menu-text">Cart</span>
                                    </a>
                                </li>

                                <li class="header-btn" role="presentation">
                                    <a href="history.php">
                                        <span class="fa fa-fw fa-history"></span>
                                        <span class="menu-text">History</span>
                                    </a>
                                </li>

                                <li class="header-btn" role="presentation">
                                    <a href="#">
                                        <span class="fa fa-fw fa-user"></span>
                                        <span class="menu-text"><?=$_SESSION['email']?></span>
                                    </a>
                                </li>

                                <li class="header-btn" role="presentation">
                                    <a href="processor/logoutuser.php">
                                        <span class="fa fa-fw fa-sign-out"></span>
                                        <span class="menu-text">Log Out</span>
                                    </a>
                                </li>
                                <?php }
                                else{ ?>
                                <li class="header-btn" role="presentation">
                                    <a href="sign.php">
                                        <span class="fa fa-fw fa-user"></span>
                                        <span class="menu-text">Sign-in/Register</span>
                                    </a>
                                </li> <?php } ?>

                            </ul>
                        </nav>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!--|||||||||||||||||||||||||| Header Kedua |||||||||||||||||||||| -->
    
</header>
<!--|||||||||||||||||||||||||||| Header |||||||||||||||||||||||||||||| -->
<!--............................ Content ............................. -->

<h1 style="margin-left: 3%;margin-top: 3%;">Cart</h1>
<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
  <?php
  $id = $_SESSION["email"];
  $sql = "SELECT * FROM cart where username = '$id'";
  $result = $conn->query($sql);$total = 0;
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      ?>

      <div class="product">
        <div class="product-image">
          <img src="<?=$row['image']; ?>">
        </div>
        <div class="product-details">
          <div class="product-title"><?=$row['nama_item']; ?></div>

        </div>
        <div class="product-price"><?=$row['harga_item']; ?></div>
        <div class="product-quantity">
          <?=$row['jumlah_item']; ?>
        </div>
        <div class="product-removal">
          <form method="post" action="processor/cartdeleteheadset.php">
            <input hidden="hidden" type="text" name="deleteitem" value="<?=$row['id_cart']; ?>">
            <input hidden="hidden" type="text" name="itemusername" value="<?=$row['username']; ?>">
            <button type="submit" class="btn btn-danger">Remove</button>
          </form>

        </div>
        <div class="product-line-price"><?=$row['total']; ?></div>
      </div>

      <?php $total = $total + $row['total']; 
    }
  } 
  else {
    echo "No Item";
  } 
  $conn->close();
  ?>



  <div class="totals">
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"><?php echo $total; ?></div>
    </div>
  </div>
  <form method="post" action="processor/addhistory.php">
    <button type="submit" class="checkout">Checkout</button>
    <input hidden="hidden" type="text" name="totalharga" value="<?php echo "$total" ?>">
  </form>

</div>
<!--|||||||||||||||||||||||||||| Content ||||||||||||||||||||||||||||| -->
<!--.................... Footer ................... -->
<div id="footer-widgets">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row hidden-xs hidden-sm">
          <div class="col-md-5 widget">
            <h3 class="widget-heading">About Us</h3>
            <div class="widget-content">
              <ul>

                <span style="color: #fff;font-size: 16px;">Address : <br> Tanjungsari, Suko Manunggal Blok MM no. 18</span><br>
                <span style="color: #fff;font-size: 16px;">
                  Contact : <br>+6281320047397</span>
                </ul>
              </div>
            </div>
            <div class="col-md-4 widget">
              <h3 class="widget-heading">Shopping Cart</h3>
              <div class="widget-content">
                <ul>
                  <li><a href="cart.php" >My Cart</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 widget">
              <h3 class="widget-heading">Our Partner</h3>
              <div class="widget-content">
                <ul>
                  <li><a href="http://www.logitech.com" target="_blank">Logitech</a></li>
                  <li><a href="https://www.razerone.com" target="_blank">Razer</a></li>
                  <li><a href="http://www.hyperxgaming.com" target="_blank">HyperX</a></li>
                </ul>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div id="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><p>Copyright © 2017 Game More</p></div>
      </div>
    </div>
  </div>
  <!--|||||||||||||||||||| Footer |||||||||||||||||| -->

</body>
</html>