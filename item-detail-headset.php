<?php
require 'config/db-config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Headset Detail</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="icon" 
     type="image/png" 
     href="favicon.ico">
     <link rel="stylesheet" type="text/css" href="css/mainheader.css">
     <link rel="stylesheet" type="text/css" href="css/mainfooter.css">
     <link rel="stylesheet" type="text/css" href="css/mainbody.css">
     <link rel="stylesheet" type="text/css" href="css/itemdetail.css">
     <script type="text/javascript">
         $(document).ready(function(){
            $("#editme").hide();
            $("#cancelbtn").hide();

        $("#editclick").click(function(){
        $('#kapaa').hide();
        $("#editbtn").hide();
        $("#editme").show();
        $("#cancelbtn").show();
        $("#editclick").hide();
    });

        $("#cancelbtn").click(function(){
        $('#kapaa').show();
        $("#editbtn").show();
        $("#editme").hide();
        $("#cancelbtn").hide();
        $("#editclick").show();
        });

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



<?php

  $post_id = $_GET["id"];
  if ($post_id == "") {
    die("Invalid Request");
  }
    $sql = "SELECT * FROM headset WHERE id_headset = $post_id";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $headset = $row['id_headset'];
        $namaitem = $row['nama'];
        $jumlahitem = $row['stock'];
        $hargaitem = $row['harga'];
        $imageurl = $row['image'];
        $stock = $row['stock'];
        $desc = $row['description'];

?>
<main id="site-content">
	<div class="page">
		<header class="page-head">
			<div class="container">
				<h1 class="page-title"><?=$row['nama']; ?></h1>
			</div>
		</header>
		<article class="product-weapper product_single">
			<div class="product_meta">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="row product_image">
								<div class="col-sm-12 col-xs-10">
									<img src='<?=$row["image"] ?>' class="img img-responsive">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<dl id="editbtn" class="dl-horizontal">
								<dt>Price</dt>
									<dd>
										<span class="sale"><?=$row["harga"]; ?>	
										</span>
									</dd>
								<dt>Brand</dt>
									<dd>
										<?=$row["merk"]; ?>
									</dd>	


                                <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE) { ?>
                                <form method="post" action="processor/insertcart.php">
                                <dt>Quantity:</dt>
                                <dd><input type="text" name="jumlahitem" value="1"></dd><br>
                                <dt>&nbsp;</dt>
                                <input type="text" hidden="hidden" name="itemid"  value="<?=$headset; ?>">
                                <input type="text" hidden="hidden" name="namaitem"  value="<?=$namaitem; ?>">
                                <input type="text" hidden="hidden" name="hargaitem"  value="<?=$hargaitem; ?>">
                                <input type="text" hidden="hidden" name="imageurl"  value="<?=$imageurl; ?>">
                                <input type="text" hidden="hidden" name="stock"  value="<?=$stock; ?>">
                                <input type="text" hidden="hidden" name="user"  value="<?=$_SESSION['email']; ?>"> 
                                <button type="submit" class="btn btn-info"><i class="fa fa-plus"></i> Add to cart</button> 
                                </form>
                                    <?php } 
                                
                                 ?>
							</dl>

							<div class="item_desc">
                            <div id="kapaa">
                                <?=$row["description"];?>
                            </div>
	                           <br>                         
                                <?php 

                                if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE && $_SESSION['email'] == "admin@admin.com") { ?>
                                <div style="text-align: center;">

                                <form method="post" action="processor/updateheadset.php">
                                <input type="text" hidden="hidden" name="itemid"  value="<?=$headset; ?>">
                                <input hidden="hidden" type="text" name="user"  value="<?=$_SESSION['email']; ?>">
                                <div id="editme">
                                Nama : <input type="text" name="namaitem" size='50' value="<?=$namaitem; ?>"><br>
                                Harga : <input type="text" name="hargaitem" size='50'  value="<?=$hargaitem; ?>"><br>
                                Image : <input type="text" name="imageurl" size='50'  value="<?=$imageurl; ?>"><br>
                                Stock : <input type="text" name="stock" size='50'  value="<?=$stock; ?>"><br>
                                Description : <textarea type="text" rows='8' cols='80' name="descriptionitem""><?=$row["description"]?></textarea><br>
                                <button class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Save</button>
                                </div>
                                </form>
                                <div id="cancel1"><button id="cancelbtn" class="btn btn-danger"> Cancel</button>
                                <button id="editclick" class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Edit</button></div>
                                
                                <form method="post" action="processor/deleteheadset.php">  
                                <input hidden="hidden" type="text" name="iddelete" value="<?=$headset?>">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-window-close"></i> Delete</button> 
                                </form>
                                </div>
                                <?php } ?>
							</div>
                            <div style="float: right;">
                            <a href="headset.php"><button class="btn btn-danger">Back</button></a> 
                            </div>
						</div>
					</div>

				</div>
			</div>

		</article>
        </div>

</main>
<?php }}
     else {
         echo "No Item";
                 } 
 ?>
<!--||||||||||||||||||||| Content ||||||||||||||||| -->
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
              <li><a href="https://www.razerone.com" target="_blank">MelonDoto</a></li>
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



                              <?php      $conn->close(); ?>  

</body>
</html>