<?php
require 'config/db-config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="mainheader.css">

	<style type="text/css">

		body {
			padding: 0;
			margin-top: 0;
			font-family: 'Playfair Display', serif;
			color: #fff;
		}

		#hero {
			height: 800px;
			position: relative;
		}

		#content {
			background-color: #130d0a;
		}

		.layer {
			background-position: bottom center;
			background-size: auto;
			background-repeat: no-repeat;
			width: 100%;
			height: 800px;
			position: fixed;
			z-index: -1;
		}

		#hero-mobile {
			display: none;
			background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/full_illustration.png") no-repeat center bottom/cover;
			height: 320px;
		}

		.first-section {
			padding: 50px 0 20px 0;
		}

		.text-header {
			font-size: 50px;
			text-align: center;
		}

		h1 {
			line-height: 120%;
			margin-bottom: 30px;
		}

		p {
			color: #ede0d5;
			font-size: 18px;
			line-height: 150%;
		}

		#hero, .layer {
			min-height: 800px;

		}

		.layer-bg {
			background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_bg.jpg");
		}

		.layer-1 {
			background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_03.png\a 		");
			background-position: left bottom;
		}

		.layer-2 {
			background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_02.png");
		}

		.layer-3 {
			background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_man.png\a 		");
			background-position: right bottom;
		}

		.layer-4 {
			background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_01.png\a 		");

		}

		.layer-overlay {
			background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_overlay.png\a 		");
		}

		@media only screen and (max-width: 768px) {
			#hero {
				display: none;
			}

			#hero-mobile {
				display: block;
			}
		}

		.jumbotron{
			background:rgba(192,192,192,0.3); 
			width: 700px;
			border:2px solid;
			margin-top: 50px;
		}

		.btn {
			background: #ffffff;
			background-image: -webkit-linear-gradient(top, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(top, #ffffff, #ffffff);
			background-image: -ms-linear-gradient(top, #ffffff, #ffffff);
			background-image: -o-linear-gradient(top, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-border-radius: 0;
			-moz-border-radius: 0;
			border-radius: 0px;
			font-family: Arial;
			color: #000000;
			font-size: 20px;
			padding: 10px 20px 10px 20px;
			border: solid #0069ab 2px;
			text-decoration: none;
		}

		.btn:hover {
			background: #3cb0fd;
			background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
			background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
			background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
			background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
			background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
			text-decoration: none;
		}
		.navbar {
			background-color: #130d0a;
		}



		@media (min-width: 768px) {
			.header, .footer {
				padding: 100px 30px;
			}
		}
		.header h1, .footer h1 {
			font-size: 4em;
			font-weight: 300;
		}
		.header i.fa, .footer i.fa {
			font-size: 4em;
		}
		.header .bounce, .footer .bounce {
			-webkit-animation-name: bounce;
			animation-name: bounce;
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom;
			animation-iteration-count: infinite;
			-webkit-animation-iteration-count: infinite;
		}
		.header .animated, .footer .animated {
			-webkit-animation-duration: 2s;
			animation-duration: 2s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.section {
			width: 100%;
			position: relative;
		}
		.section .left, .section .middle, .section .right {
			width: 100%;
			display: block;
			color: #fff;
			box-sizing: border-box;
			left: 0;
			padding: 30px;
			text-align: center;
			overflow: hidden;
			-moz-transition: 0.3s ease-in-out all;
			-o-transition: 0.3s ease-in-out all;
			-webkit-transition: 0.3s ease-in-out all;
			transition: 0.3s ease-in-out all;
		}
		@media (min-width: 480px) {
			.section .left .content, .section .middle .content, .section .right .content {
				position: relative;
				top: 50%;
				-webkit-transform: translateY(-50%);
				-ms-transform: translateY(-50%);
				transform: translateY(-50%);
			}
		}
		@media (min-width: 480px) {
			.section .left, .section .middle, .section .right {
				width: 50%;
				font-size: 0.9em;
				padding: 10px;
				left: 0;
				float: left;
				position: absolute;
			}
		}
		@media (min-width: 768px) {
			.section .left, .section .middle, .section .right {
				width: 33.33333%;
				left: 33.33%;
				padding: 10px;
			}
		}
		@media (min-width: 992px) {
			.section .left, .section .middle, .section .right {
				padding: 30px;
				font-size: 1em;
			}
		}
		.section.animate .left {
			left: 0;
		}
		@media (min-width: 480px) {
			.section.animate .left {
				left: 50%;
			}
		}
		@media (min-width: 768px) {
			.section.animate .left {
				left: 0;
			}
		}
		.section.animate .right {
			left: 0;
		}
		@media (min-width: 480px) {
			.section.animate .right {
				left: 50%;
			}
		}
		@media (min-width: 768px) {
			.section.animate .right {
				left: 66.66%;
			}
		}
		.section .title {
			background: tomato;
		}
		.section .title h2 {
			margin-top: 0;
		}
		.section .title p {
			line-height: 1.55em;
			margin-bottom: 0.75em;
		}
		.section .title .btn-primary {
			color: #fff;
			background: #ff3814;
			padding: 10px;
			text-decoration: none;
			border-radius: 3px;
			display: inline-block;
			-moz-transition: 0.3s ease-in-out all;
			-o-transition: 0.3s ease-in-out all;
			-webkit-transition: 0.3s ease-in-out all;
			transition: 0.3s ease-in-out all;
		}
		.section .title .btn-primary:hover {
			background: #fa2600;
		}
		.section .tiles {
			padding: 0;
			background: #fff;
			clear: both;
			display: none;
			float: none;
		}
		.section .tiles img {
			width: 50%;
			float: left;
			height: auto;
			opacity: 0.7;
			-moz-transition: 0.3s ease-in-out all;
			-o-transition: 0.3s ease-in-out all;
			-webkit-transition: 0.3s ease-in-out all;
			transition: 0.3s ease-in-out all;
			-webkit-filter: grayscale(100%);
			-moz-filter: grayscale(100%);
			-o-filter: grayscale(100%);
		}
		.section .tiles img:hover {
			opacity: 1;
			-webkit-filter: grayscale(0%);
			-moz-filter: grayscale(0%);
			-o-filter: grayscale(0%);
		}
		@media (min-width: 768px) {
			.section .tiles {
				display: block;
			}
		}
		.section .middle {
			background: slategray;
			z-index: 2;
			padding: 0;
		}
		.section .middle img {
			width: 100%;
			height: auto;
			display: block;
		}

		@-webkit-keyframes bounce {
			0%, 20%, 50%, 80%, 100% {
				-webkit-transform: translateY(0);
			}
			40% {
				-webkit-transform: translateY(-20px);
			}
			60% {
				-webkit-transform: translateY(-10px);
			}
		}
		@keyframes bounce {
			0%, 20%, 50%, 80%, 100% {
				transform: translateY(0);
			}
			40% {
				transform: translateY(-20px);
			}
			60% {
				transform: translateY(-10px);
			}
		}
		.footer{
			width: 100%;
			height: 200px;
		}
		.footer {
			background-image:url("image/home/pika.gif"), url("image/home/mario.gif"), url("image/home/test2_white.png"), url("http://portfolio.kageetai.net/mario/ground.png"), url("http://portfolio.kageetai.net/mario/bushes.png");
			background-color:  #130d0a;
			background-repeat: no-repeat,no-repeat,no-repeat, repeat-x, repeat-x, repeat-x;
			background-position: left 30% bottom 24px,left 30% bottom 24px,left 30% bottom 24px, left 0px bottom 0px, left 0px bottom 24px, left 0px bottom 0px;
			-webkit-animation: back 30s infinite linear;
			animation: back 30s infinite linear;
		}

		@-webkit-keyframes back {
			0% {
				background-position: left 60% bottom 24px,left 30% bottom 24px,left 10% bottom 24px, left 0px bottom 0px, left 0px bottom 24px, left 0px bottom 0px;
			}
			50% {
				background-position: left 10% bottom 24px,left 50% bottom 24px,left 10% bottom 24px, left -816px bottom 0px, left -508px bottom 24px, left -256px bottom 0px;
			}
			100% {
				background-position: left 40% bottom 24px,left 100% bottom 24px,left 10% bottom 24px, left -1632px bottom 0px, left -1016px bottom 24px, left -512px bottom 0px;
			}
		}

		@keyframes back {
			0% {
				background-position: left 0% bottom 24px,left 50% bottom 24px,left 100% bottom 120px, left 0px bottom 0px, left 0px bottom 24px, left 0px bottom 0px;
			}
			50% {
				background-position: left 50% bottom 24px,left 50% bottom 24px,left 50% bottom 120px, left -816px bottom 0px, left -508px bottom 24px, left -256px bottom 0px;
			}
			100% {
				background-position: left 100% bottom 24px,left 50% bottom 24px,left 0% bottom 120px, left -1632px bottom 0px, left -1016px bottom 24px, left -512px bottom 0px;
			}
		}

		.buttonpoll {border-radius: 50%;background-color: black;font-size: 30px;color: white;}


	</style>
	<script type="text/javascript">
		window.addEventListener('scroll', function(event) {
			var depth, i, layer, layers, len, movement, topDistance, translate3d;
			topDistance = this.pageYOffset;
			layers = document.querySelectorAll("[data-type='parallax']");
			for (i = 0, len = layers.length; i < len; i++) {
				layer = layers[i];
				depth = layer.getAttribute('data-depth');
				movement = -(topDistance * depth);
				translate3d = 'translate3d(0, ' + movement + 'px, 0)';
				layer.style['-webkit-transform'] = translate3d;
				layer.style['-moz-transform'] = translate3d;
				layer.style['-ms-transform'] = translate3d;
				layer.style['-o-transform'] = translate3d;
				layer.style.transform = translate3d;
			}
		});

		$(document).ready(function(){

			var $sm = 480;
			var $md = 768;

			function resizeThis() {
				$imgH = $('.middle img').width();
				if ($(window).width() >= $sm) {
					$('.left,.right,.section').css('height', $imgH);
				} else {
					$('.left,.right,.section').css('height', 'auto');
				}
			}

			resizeThis();

			$(window).resize(function(){
				resizeThis();
			});

			$(window).scroll(function() {
				$('.section').each(function(){
					var $elementPos = $(this).offset().top;
					var $scrollPos = $(window).scrollTop();

					var $sectionH = $(this).height();
					var $h = $(window).height();
					var $sectionVert = (($h/2)-($sectionH/4));


					if (($elementPos - $sectionVert) <= $scrollPos && ($elementPos - $sectionVert) + $sectionH > $scrollPos) {
						$(this).addClass('animate');
					} else {
						$(this).removeClass('animate');
					}
				});
			});

			$('.btn-primary').click(function(){
				alert('I lied');
			});
		});

		$(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		$(window).scroll(
		{
			previousTop: 0
		}, 
		function () {
			var currentTop = $(window).scrollTop();
			if (currentTop < this.previousTop) {
				$(".header").show();
			} else {
				$(".header").hide();
			}
			this.previousTop = currentTop;
		});
	</script>
</head>

<body>

	<div id="hero">
		<!--|||||||||||||||||||||||||||| Header |||||||||||||||||||||||||||||| -->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background:transparent; border-color:transparent">

			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"></a>
				</div>
				<ul class="nav navbar-nav" style="float:right;">
					<?php 
					if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE && $_SESSION['email'] == "admin@admin.com"){ ?>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="keyboard.php">Keyboard</a></li>
					<li><a href="mouse.php">Mouse</a></li>
					<li><a href="headset.php">Headset</a></li>
					<li><a href="console.php">Console</a></li>
					<li><a href="additem.php">Add New Item</a></li>
					<li><a href="#"><?=$_SESSION['email']?></a></li>
					<li><a href="processor/logoutuser.php">Logout</a></li>
					<?php } elseif (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE){ ?>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="keyboard.php">Keyboard</a></li>
					<li><a href="mouse.php">Mouse</a></li>
					<li><a href="headset.php">Headset</a></li>
					<li><a href="console.php">Console</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="#"><?=$_SESSION['email']?></a></li>
					<li><a href="processor/logoutuser.php">Logout</a></li>
					<?php } else{ ?>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="keyboard.php">Keyboard</a></li>
					<li><a href="mouse.php">Mouse</a></li>
					<li><a href="headset.php">Headset</a></li>
					<li><a href="console.php">Console</a></li>
					<li><a href="sign.php">Sign In | Sign Up</a></li>
					<?php } ?>
				</ul>
			</div>

		</nav>
		<div class="layer-bg layer" data-type="parallax" data-type="0.10"></div>
		<div class="layer-1 layer" data-type="parallax" data-depth="0.20">
			<img src="image/home/test1.png" style="height:200px; width:400px;float:right;margin-right:40px;">
		</div>
		<div class="layer-2 layer" data-type="parallax" data-depth="0.50">
			<br><br><br><br><br><br><br><br>
			<img src="image/home/mario.png" style="height:300px; width:500px;">
		</div>
		<div class="layer-3 layer" data-type="parallax" data-depth="0.80"></div>
		<div class="layer-overlay layer" data-type="parallax" data-depth="0.85">
			<div class="container">
			</div>
		</div>
		<div class="layer-4 layer" data-type="parallax" data-depth="1.00"></div>
	</div>
	<div id="hero-mobile"></div>

	<div id="content" >
		<div class="container text-center">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h3 style="font-size: 40px;">About US</h3>
			<p style="font-size: 22px;"><em>" Gaming Is Life "</em></p>
			<p style="font-size: 20px;">We are one of the best gaming shop that you can find online. On our website we provide the most cheapest and brand new items with the highest quality you can get in the market. Why should you trust us? Because we have already sold over 1000+ products and we have awesome official sponsorship that you should definitely check out. Our website offer gaming accessories, consoles and also console games. We have the newest products that the market can offer. We update our products every week. So what are you waiting for? Come and order us now.</p>
			</div>
		<div class="col-sm-2"></div>
			<br>
			<div class="row">
				<div class="col-sm-3">
					
					<a href="#demo" data-toggle="collapse">
						<img src="image/home/razer.png" class="img-circle person" alt="Random Name" width="300" height="100">
					</a>

				</div>
				<div class="col-sm-3">
					
					<a href="#demo2" data-toggle="collapse">
						<img src="image/home/hyperx.png" class="img-circle person" alt="Random Name" width="300" height="100">
					</a>

				</div>
				<div class="col-sm-3">
					
					<a href="#demo3" data-toggle="collapse">
						<img src="image/home/logitech.png" class="img-circle person" alt="Random Name" width="300" height="100">
					</a>
				</div>

				<div class="col-sm-3">
					
					<a href="#demo3" data-toggle="collapse">
						<img src="image/home/steelseries.png" class="img-circle person" alt="Random Name" width="300" height="100">
					</a>
				</div>
			</div>
			<br><br>



			<div class="section animate">
				<div class="middle">
					<img src="image/home/steels.png" />
				</div>
				<div class="left title">
					<div class="content">
						<h2>Steelseries</h2>
						<p>One of the best professional gaming gears, considered to be one of the biggest names in eSport today.It helps professional players to achieve glory in each competition </p>
						<a href="#" class="btn-primary">Learn more</a>
					</div>
				</div>
				<div class="right tiles">
					<img src="image/home/artez.png" />
					<img src="image/home/egwin.png" />
					<img src="image/home/eglook.png" />
					<img src="image/home/sumail.png" />
				</div>
			</div>

			<div class="section">
				<div class="middle">
					<img src="image/home/games.png" />
				</div>
				<div class="right title">
					<div class="content">
					<h2>Console</h2>
						<p>Check our consoles list. we provide gaming consoles. and also console games that you can enjoy with your friend and will brighten your day with fun and pleasure.</p>
					</div>
				</div>

				<div class="left tiles">
					<img src="image/home/ps4.png" />
					<img src="image/home/compeps.png" />
					<img src="image/home/playps.png" />
					<img src="image/home/xbox.png" />
				</div>

			</div>
			<?php 
			$countrate = 0;
			$sqlcount = "SELECT * FROM poll_system";
			$resultrate = $conn->query($sqlcount);
			if($resultrate->num_rows > 0){
				while($rowrate = $resultrate->fetch_assoc()){ 
					$countrate = $countrate + $rowrate['countrate'];
				}
			}
			?>

			<?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE && $_SESSION['email'] == "admin@admin.com" || isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE && $_SESSION['rate'] == 1) {?>
			<div class="span" style="text-align: center;width: 33.2%;margin-left: 33.2%;">



				<h2 style="text-align: center;">Rate our Site</h2>
				<?php 
				$sqlrate1 = "SELECT * FROM poll_system where pollrate = 5;";
				$resultrate1 = $conn->query($sqlrate1);
				$rowrate1 = $resultrate1->fetch_assoc();
				$percent1 = number_format(($rowrate1['countrate'] / $countrate) * 100.0 , 2);

				?>

				<span class="pull-left"><?php echo $percent1;?>%</span> <strong>Extremely Cool!</strong>
				<div class="progress" style="width: 100%;">
					<div class="progress-bar" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent1;?>%;">
				</div>
			</div>

			<?php 
			$sqlrate2 = "SELECT * FROM poll_system where pollrate = 4;";
			$resultrate2 = $conn->query($sqlrate2);
			$rowrate2 = $resultrate2->fetch_assoc();
			$percent2 = number_format(($rowrate2['countrate'] / $countrate) * 100.0 , 2);

			?>
			<span class="pull-left"><?php echo $percent2;?>%</span> <strong>Very Good!</strong>
			<div class="progress" style="width: 100%;">
				<div class="progress-bar" role="progressbar" aria-valuenow="70"
				aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent2;?>%;">
			</div>
		</div>

		<?php 
		$sqlrate3 = "SELECT * FROM poll_system where pollrate = 3;";
		$resultrate3 = $conn->query($sqlrate3);
		$rowrate3 = $resultrate3->fetch_assoc();
		$percent3 = number_format(($rowrate3['countrate'] / $countrate) * 100.0 , 2);
		?>
		<span class="pull-left"><?php echo $percent3;?>%</span> <strong>Okay</strong>
		<div class="progress" style="width: 100%;">
			<div class="progress-bar" role="progressbar" aria-valuenow="70"
			aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent3;?>%;">
		</div>
	</div>

	<?php 
	$sqlrate4 = "SELECT * FROM poll_system where pollrate = 2;";
	$resultrate4 = $conn->query($sqlrate4);
	$rowrate4 = $resultrate4->fetch_assoc();
	$percent4 = number_format(($rowrate4['countrate'] / $countrate) * 100.0 , 2);
	?>
	<span class="pull-left"><?php echo $percent4;?>%</span> <strong>Bad!</strong>
	<div class="progress" style="width: 100%;">
		<div class="progress-bar" role="progressbar" aria-valuenow="70"
		aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent4;?>%;">
	</div>
</div>

<?php 
$sqlrate5 = "SELECT * FROM poll_system where pollrate = 1;";
$resultrate5 = $conn->query($sqlrate5);
$rowrate5 = $resultrate5->fetch_assoc();
$percent5 = number_format(($rowrate5['countrate'] / $countrate) * 100.0 , 2);
?>
<span class="pull-left"><?php echo $percent5;?>%</span> <strong>Very Bad!</strong>
<div class="progress" style="width: 100%;">
	<div class="progress-bar" role="progressbar" aria-valuenow="70"
	aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent5;?>%;">
</div>
</div>
</div>
<?php }  elseif(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE && $_SESSION['rate'] == 0) { ?>

<div class="span" style="text-align: center;width: 33.2%;margin-left: 33.2%;">
	<h2 style="text-align: center;">Rate our Site</h2>
	<div style="margin: 30%;margin-top: 0%;text-align: left;">
		<form method="post" action="processor/addrate.php">
			<div class="radio">
				<label><input type="radio" name="optradio" value="5">Extremly Cool!</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="4">Very Good!</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="3">Okay</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="2">Bad!</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio" value="1">Very Bad</label>
			</div>
			<button style="margin-left: 10%;" type="submit" class="buttonpoll">Poll</button>
			<input hidden="hidden" type="text" name="iduser" value="<?=$_SESSION['email']?>">
		</form>
	</div>
</div>

<?php } 
else {?>
<div class="span" style="text-align: center;width: 33.2%;margin-left: 33.2%;">



	<h2 style="text-align: center;">Rate our Site</h2>
	<?php 
	$sqlrate1 = "SELECT * FROM poll_system where pollrate = 5;";
	$resultrate1 = $conn->query($sqlrate1);
	$rowrate1 = $resultrate1->fetch_assoc();
	$percent1 = number_format(($rowrate1['countrate'] / $countrate) * 100.0 , 2);

	?>

	<span class="pull-left"><?php echo $percent1;?>%</span> <strong>Extremely Cool!</strong>
	<div class="progress" style="width: 100%;">
		<div class="progress-bar" role="progressbar" aria-valuenow="70"
		aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent1;?>%;">
	</div>
</div>

<?php 
$sqlrate2 = "SELECT * FROM poll_system where pollrate = 4;";
$resultrate2 = $conn->query($sqlrate2);
$rowrate2 = $resultrate2->fetch_assoc();
$percent2 = number_format(($rowrate2['countrate'] / $countrate) * 100.0 , 2);

?>
<span class="pull-left"><?php echo $percent2;?>%</span> <strong>Very Good!</strong>
<div class="progress" style="width: 100%;">
	<div class="progress-bar" role="progressbar" aria-valuenow="70"
	aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent2;?>%;">
</div>
</div>

<?php 
$sqlrate3 = "SELECT * FROM poll_system where pollrate = 3;";
$resultrate3 = $conn->query($sqlrate3);
$rowrate3 = $resultrate3->fetch_assoc();
$percent3 = number_format(($rowrate3['countrate'] / $countrate) * 100.0 , 2);

?>
<span class="pull-left"><?php echo $percent3;?>%</span> <strong>Okay</strong>
<div class="progress" style="width: 100%;">
	<div class="progress-bar" role="progressbar" aria-valuenow="70"
	aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent3;?>%;">
</div>
</div>

<?php 
$sqlrate4 = "SELECT * FROM poll_system where pollrate = 2;";
$resultrate4 = $conn->query($sqlrate4);
$rowrate4 = $resultrate4->fetch_assoc();
$percent4 = number_format(($rowrate4['countrate'] / $countrate) * 100.0 , 2);
?>
<span class="pull-left"><?php echo $percent4;?>%</span> <strong>Bad!</strong>
<div class="progress" style="width: 100%;">
	<div class="progress-bar" role="progressbar" aria-valuenow="70"
	aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent4;?>%;">
</div>
</div>

<?php 
$sqlrate5 = "SELECT * FROM poll_system where pollrate = 1;";
$resultrate5 = $conn->query($sqlrate5);
$rowrate5 = $resultrate5->fetch_assoc();
$percent5 = number_format(($rowrate5['countrate'] / $countrate) * 100.0 , 2);
?>
<span class="pull-left"><?php echo $percent5;?>%</span> <strong>Very Bad!</strong>
<div class="progress" style="width: 100%;">
	<div class="progress-bar" role="progressbar" aria-valuenow="70"
	aria-valuemin="0" aria-valuemax="100" style="width :<?php echo $percent5;?>%;">
</div>
</div>
</div>
<?php }?>


</div>
</div>


<div class="footer">

</div>
<?php $conn->close();?>
</body>
</html>