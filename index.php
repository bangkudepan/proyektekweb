<?php
require 'config/db-config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
      <!-- CSS -->
    <link rel="icon" 
    type="image/png" 
    href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/mainheader.css">
    <link rel="stylesheet" type="text/css" href="css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="css/mainfooter.css">
    <style type="text/css">
.thumbnail{
    height:400px;
    }
#img1 {
    height:200px;
}
    
.col-sm-6 col-md-3{
    }
    </style>
  <style type="text/css">
  	.carousel-inner .item{
	background: #a7cfdf; /* Old browsers */
	background: -moz-linear-gradient(top,  #a7cfdf 0%, #23538a 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  #a7cfdf 0%,#23538a 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  #a7cfdf 0%,#23538a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a7cfdf', endColorstr='#23538a',GradientType=0 ); /* IE6-9 */
    text-align: center;
    height: 300px;/*change as your needs*/
}
.control-buttons{
	text-align:center;
}
.transition-timer-carousel-progress-bar {
    height: 3px;
    background-color: #5cb85c;/*progress bar color*/
    width: 0;
    margin: 0 0 0 0;
    border: none;
    z-index: 11;
    position: relative;
}
.carousel-control{
	z-index: 11;
}
.thumbnail{
	height:400px;
	}
#img1 {
	height:200px;}
	
.col-sm-6 col-md-3{
	}
  </style>
  
  <script type="text/javascript">
  	$(document).ready(function(){
	var percent = 0,
	interval = 30,//it takes about 6s, interval=20 takes about 4s
	$bar = $('.transition-timer-carousel-progress-bar'),
	$crsl = $('#myCarousel');
	$('.carousel-indicators li, .carousel-control').click(function (){$bar.css({width:0.5+'%'});});
	/*line above just for showing when controls are clicked the bar goes to 0.5% to make more friendly, 
	if you want when clicked set bar empty, change on width:0.5 to width:0*/
	$crsl.carousel({//initialize
		interval: false,
		pause: true
	}).on('slide.bs.carousel', function (){percent = 0;});//This event fires immediately when the bootstrap slide instance method is invoked.
	function progressBarCarousel() {
		$bar.css({width:percent+'%'});
		percent = percent +0.5;
		if (percent>=100) {
			percent=0;
			$crsl.carousel('next');
		}
	}
	var barInterval = setInterval(progressBarCarousel, interval);//set interval to progressBarCarousel function
	if (!(/Mobi/.test(navigator.userAgent))) {//tests if it isn't mobile
		$crsl.hover(function(){
					clearInterval(barInterval);
				},
				function(){
					barInterval = setInterval(progressBarCarousel, interval);
				}
		);
	}
});
  </script>
</head>
<body>

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
<div class="container">


<h1 class="text-center"> Best Seller </h1>

<?php               $sql = "SELECT * FROM headset where id_headset = '100101'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc(); 
 ?>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-headset.php?id=100101"><img src='<?=$row["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-headset.php?id=100101"><h3><?=$row["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <?=$row["harga"]?></p>
      </div>
    </div>
  </div>

<?php               $sql1 = "SELECT * FROM mouse where id_mouse = '300301'";
                    $result1 = $conn->query($sql1);
                    $row1 = $result1->fetch_assoc(); 
 ?>

    <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-mouse.php?id=300301"><img src='<?=$row1["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-mouse.php?id=300301"><h3><?=$row1["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <?=$row1["harga"]?></p>
      </div>
    </div>
  </div>

<?php               $sql2 = "SELECT * FROM keyboard where id_keyboard = '200204'";
                    $result2 = $conn->query($sql2);
                    $row2 = $result2->fetch_assoc(); 
 ?>
      <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-keyboard.php?id=200204"><img src='<?=$row2["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-keyboard.php?id=200204"><h3><?=$row2["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <?=$row2["harga"]?></p>
      </div>
    </div>
  </div>

<?php               $sql3 = "SELECT * FROM console where id_console = '400401'";
                    $result3 = $conn->query($sql3);
                    $row3 = $result3->fetch_assoc(); 
 ?>
      <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-console.php?id=400401"><img src='<?=$row3["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-console.php?id=400401"><h3><?=$row3["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <?=$row3["harga"]?></p>
      </div>
    </div>
  </div>

</div>
<h1 class="text-center"> Special Sale </h1>


<div class="row">
<?php               $sql4 = "SELECT * FROM mouse where id_mouse = '300302'";
                    $result4 = $conn->query($sql4);
                    $row4 = $result4->fetch_assoc(); 
 ?>


        <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-mouse.php?id=300302"><img src='<?=$row4["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-mouse.php?id=300302"><h3><?=$row4["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>860000</s> <?=$row4["harga"]?> </p>
      </div>
    </div>
  </div>

  <?php               $sql5 = "SELECT * FROM keyboard where id_keyboard = '200202'";
                    $result5 = $conn->query($sql5);
                    $row5 = $result5->fetch_assoc(); 
 ?>

          <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-keyboard.php?id=200202"><img src='<?=$row5["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-keyboard.php?id=200202"><h3><?=$row5["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>1100000</s> <?=$row5["harga"]?> </p>
      </div>
    </div>
  </div>

    <?php               $sql6 = "SELECT * FROM headset where id_headset = '100103'";
                    $result6 = $conn->query($sql6);
                    $row6 = $result6->fetch_assoc(); 
 ?>

   <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-headset.php?id=100103"><img src='<?=$row6["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-headset.php?id=100103"><h3><?=$row6["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>2100000</s> <?=$row6["harga"]?> </p>
      </div>
    </div>
  </div>

    <?php               $sql7 = "SELECT * FROM console where id_console = '400404'";
                    $result7 = $conn->query($sql7);
                    $row7 = $result7->fetch_assoc(); 
 ?>

  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-console.php?id=400404"><img src='<?=$row7["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-console.php?id=400404"><h3><?=$row7["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>450000</s> <?=$row7["harga"]?> </p>
      </div>
    </div>
  </div>

      <?php            $sql8 = "SELECT * FROM keyboard where id_keyboard = '200205'";
                    $result8 = $conn->query($sql8);
                    $row8 = $result8->fetch_assoc(); 
 ?>

  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-keyboard.php?id=200205"><img src='<?=$row8["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-keyboard.php?id=200205"><h3><?=$row8["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>2000000</s> <?=$row8["harga"]?> </p>
      </div>
    </div>
  </div>

      <?php               $sql9 = "SELECT * FROM console where id_console = '400406'";
                    $result9 = $conn->query($sql9);
                    $row9 = $result9->fetch_assoc(); 
 ?>

     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-console.php?id=400406"><img src='<?=$row9["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-console.php?id=400406"><h3><?=$row9["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>300000</s> <?=$row9["harga"]?> </p>
      </div>
    </div>
  </div>

      <?php               $sql10 = "SELECT * FROM mouse where id_mouse = '300304'";
                    $result10 = $conn->query($sql10);
                    $row10 = $result10->fetch_assoc(); 
 ?>

     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-mouse.php?id=300304"><img src='<?=$row10["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-mouse.php?id=300304"><h3><?=$row10["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>1100000</s> <?=$row10["harga"]?> </p>
      </div>
    </div>
  </div>

      <?php               $sql11 = "SELECT * FROM headset where id_headset = '100104'";
                    $result11 = $conn->query($sql11);
                    $row11 = $result11->fetch_assoc(); 
 ?>

     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="item-detail-headset.php?id=100104"><img src='<?=$row11["image"] ?>' alt="..." id="img1"></a>
      <div class="caption">
        <a href="item-detail-headset.php?id=100104"><h3><?=$row11["nama"]?></h3></a>
        <p style="font-size: 18px;">Rp <s>1150000</s> <?=$row11["harga"]?> </p>
      </div>
    </div>
  </div>

	</div>
  </div>
    <?php $conn->close(); ?>

    
  
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
                  <li><a href="http://goodgamingshop.com/account/" target="_blank">Login/Register</a></li>
                  <li><a href="http://goodgamingshop.com/cart" target="_blank">My Cart</a></li>
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
