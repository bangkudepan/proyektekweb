<!DOCTYPE html>
<html>
<head>
  <title>Add Item</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<script type="text/javascript">
  $(document).ready(function(){

  $("#keyboard").hide();
  $("#mouse").hide();
  $("#headset").hide();
  $("#console").hide();


    $("#buttonkeyboard").click(function(){
        $("#keyboard").show();
        $("#mouse").hide();
        $("#headset").hide();
        $("#console").hide();
    });

    $("#buttonmouse").click(function(){
        $("#mouse").show();
        $("#keyboard").hide();
        $("#headset").hide();
        $("#console").hide();
    });

    $("#buttonheadset").click(function(){
        $("#headset").show();
        $("#keyboard").hide();
        $("#mouse").hide();
        $("#console").hide();
    });

    $("#buttonconsole").click(function(){
        $("#headset").hide();
        $("#keyboard").hide();
        $("#mouse").hide();
        $("#console").show();
    });



});

</script>
</head>
<body>

<div style="padding-left: 7.5%;">
<h1>Add New Item</h1>
<a href="#keyboard"><button id="buttonkeyboard" type="button" class="btn btn-default">Keyboard</button></a> &nbsp
<a href="#mouse"><button id="buttonmouse" type="button" class="btn btn-default">Mouse</button></a> &nbsp
<a href="#headset"><button id="buttonheadset" type="button" class="btn btn-default">Headset</button></a>
<a href="#console"><button id="buttonconsole" type="button" class="btn btn-default">Console</button></a>
</div>
<br>

<div id="keyboard" class="container">
    <form method="post" action="processor/addkeyboard.php">
      <div class="form-group">
        <label for="postName">Nama Keyboard:</label>
        <input type="text" class="form-control" id="keyboardname" name="keyboardname">
      </div>
      <div class="form-group">
        <label for="postDescription">Merk</label>
        <textarea class="form-control" rows="5" id="merkkeyboard" name="merkkeyboard"></textarea>
      </div>
      <div class="form-group">
        <label for="postDescription">Stock</label>
        <textarea class="form-control" rows="5" id="stockkeyboard" name="stockkeyboard"></textarea>
      </div>
      <div class="form-group">
        <label for="postImageUrl">Description</label>
        <textarea class="form-control" rows="5" id="descriptionkeyboard" name="descriptionkeyboard"></textarea>
      </div>
      <div class="form-group">
        <label for="postPrice">Harga:</label>
        <input type="text" class="form-control" id="hargakeyboard" name="hargakeyboard">
      </div>
      <div class="form-group">
        <label for="postPrice">Image File:</label>
        <input type="text" class="form-control" id="imagekeyboard" name="imagekeyboard">
      </div>
      <button type="submit" class="btn btn-default">Add</button>
      <button type="submit" class="btn btn-default">Cancel</button>
    </form>
  </div>

  <div id="mouse" class="container">
    <form method="post" action="processor/addmouse.php">
      <div class="form-group">
        <label for="postName">Nama Mouse:</label>
        <input type="text" class="form-control" id="mousename" name="mousename">
      </div>
      <div class="form-group">
        <label for="postDescription">Merk</label>
        <textarea class="form-control" rows="5" id="merkmouse" name="merkmouse"></textarea>
      </div>
      <div class="form-group">
        <label for="postDescription">Stock</label>
        <textarea class="form-control" rows="5" id="stockmouse" name="stockmouse"></textarea>
      </div>
      <div class="form-group">
        <label for="postImageUrl">Description</label>
        <textarea class="form-control" rows="5" id="descriptionmouse" name="descriptionmouse"></textarea>
      </div>
      <div class="form-group">
        <label for="postPrice">Harga:</label>
        <input type="text" class="form-control" id="hargamouse" name="hargamouse">
      </div>
      <div class="form-group">
        <label for="postPrice">Image File:</label>
        <input type="text" class="form-control" id="imagemouse" name="imagemouse">
      </div>
      <button type="submit" class="btn btn-default">Add</button>
      <button type="submit" class="btn btn-default">Cancel</button>
    </form>
  </div>

  <div id="headset" class="container">
    <form method="post" action="processor/addheadset.php">
      <div class="form-group">
        <label for="postName">Nama Headset:</label>
        <input type="text" class="form-control" id="headsetname" name="headsetname">
      </div>
      <div class="form-group">
        <label for="postMerk">Merk</label>
        <textarea class="form-control" rows="5" id="merkheadset" name="merkheadset"></textarea>
      </div>
      <div class="form-group">
        <label for="postStock">Stock</label>
        <textarea class="form-control" rows="5" id="stockheadset" name="stockheadset"></textarea>
      </div>
      <div class="form-group">
        <label for="postDescription">Description</label>
        <textarea class="form-control" rows="5" id="descriptionheadset" name="descriptionheadset"></textarea>
      </div>
      <div class="form-group">
        <label for="postPrice">Harga:</label>
        <input type="text" class="form-control" id="hargaheadset" name="hargaheadset">
      </div>
      <div class="form-group">
        <label for="postImage">Image File:</label>
        <input type="text" class="form-control" id="imageheadset" name="imageheadset">
      </div>
      <button type="submit" class="btn btn-default">Add</button>
      <button type="submit" class="btn btn-default">Cancel</button>
    </form>
  </div>

  <div id="console" class="container">
    <form method="post" action="processor/addconsole.php">
      <div class="form-group">
        <label for="postName">Nama :</label>
        <input type="text" class="form-control" id="consolename" name="consolename">
      </div>
      <div class="form-group">
        <label for="postDescription">Merk</label>
        <textarea class="form-control" rows="5" id="merkconsole" name="merkconsole"></textarea>
      </div>
      <div class="form-group">
        <label for="postDescription">Stock</label>
        <textarea class="form-control" rows="5" id="stockconsole" name="stockconsole"></textarea>
      </div>
      <div class="form-group">
        <label for="postImageUrl">Description</label>
        <textarea class="form-control" rows="5" id="descriptionconsole" name="descriptionconsole"></textarea>
      </div>
      <div class="form-group">
        <label for="postPrice">Harga:</label>
        <input type="text" class="form-control" id="hargaconsole" name="hargaconsole">
      </div>
      <div class="form-group">
        <label for="postPrice">Image File:</label>
        <input type="text" class="form-control" id="imageconsole" name="imageconsole">
      </div>
      <button type="submit" class="btn btn-default">Add</button>
      <button type="submit" class="btn btn-default">Cancel</button>
    </form>
  </div>

</body>
</html>