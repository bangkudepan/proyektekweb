<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="mainheader.css">
      <link rel="stylesheet" type="text/css" href="mainfooter.css">
      <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
<!--............................ Content ............................. -->
  

  <div id="fback">
  <div class="girisback">
  <img src="image/sign2.png">
  </div>
  <div class="kayitback">
  <img src="image/sign1.png"></div>
  </div>

  <div id="textbox">
    <div class="toplam">

      <div class="left">
        <div id="ic">
          <h2>Sign Up</h2>
          
          <form action="processor/registeruser.php" id="girisyap" id="signup_form" method="post">

            <div class="form-group">
              <label class="control-label" for="inputNormal">Email</label>
              <input type="email" name="signup_email" id="signup_email" class="bp-suggestions form-control" required="required" cols="50" rows="10"> </div>
            <div class="form-group">
              <label class="control-label" for="inputNormal">Password</label>
              <input type="password" name="signup_password" id="signup_password" value="" class="bp-suggestions form-control" required="required" cols="50" rows="10" >
            </div>
            <div class="form-group soninpt">
              <label class="control-label" for="inputNormal">Full Name</label>
              <input type="text" name="signup_fullname" id="signup_fullname" class="bp-suggestions form-control" cols="50" required="required" rows="10">
            </div>
            <input type="submit" name="signup_submit" id="signup_submit" value="Sign Up" class="girisbtn"  />
          </form>

          <button id="moveright">Login</button>
          <a href="home.php"><button class="btn btn danger">Back</button></a>
        </div>
      </div>

      <div class="right">
        <div id="ic">
          <h2>Login</h2>
          
          <form action="processor/loginuser.php" id="girisyap" id="sidebar-user-login" method="post" >

            <div class="form-group">
              <label class="control-label" for="inputNormal">Email</label>
              <input type="email" name="email" class="bp-suggestions form-control" cols="50" required="required" rows="10" >
            </div>
            <div class="form-group soninpt">
              <label class="control-label" for="inputNormal">Password</label>
              <input type="password" name="pwd" class="bp-suggestions form-control" cols="50" required="required" rows="10">
            </div>
            <input type="submit" value="Login" class="girisbtn" tabindex="100" />
          </form>

          <button id="moveleft">Sign Up</button>
          <a href="home.php"><button class="btn btn danger">Back</button></a>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript">
   $('.form-control').on('focus blur', function (e) {
    $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
  }).trigger('blur');

   $('#moveleft').click(function() {
    $('#textbox').animate({
    'marginLeft': "0" //moves left
  });

    $('.toplam').animate({
    'marginLeft': "100%" //moves right
  });
  });

   $('#moveright').click(function() {
    $('#textbox').animate({
    'marginLeft': "50%" //moves right
  });

    $('.toplam').animate({
    'marginLeft': "0" //moves right
  });
  });
</script>
</body>
</html>