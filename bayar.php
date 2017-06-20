<?php
require 'config/db-config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Pembayaran</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>		
<?php 
session_start();
	$id = $_SESSION["email"];
  $sql = "SELECT * FROM bayar where username = '$id'";
  $result = $conn->query($sql);
    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      
?>
<body style="width:100%;height:100%;margin:0px;">
<div style="width:100%;height:150px;background-color:black"><img src="test1_white.png" style="width:190px;height:150px;margin-left: 45%;margin-top: -20px;"></div>
<div style="margin-left:10px;">			
<h3 style="font-size: 17px;">Transfer total pembayaran ke rekening BCA : 4124141414<br> Atas nama : Martin Krump</h3>
<h3 style="font-size: 17px;">Transfer total pembayaran ke rekening MANDIRI : 1115523231<br> Atas nama : Martin Krump</h3>

<h1 style="font-size: 17px;"> Total Pembayaran = Rp <?php echo $row['total'];?></h1>

<form style="display: inline;" action="processor/pembayaran.php" method="post">

<h1 style="font-size: 15px;"> User : <?php echo $id; ?></h1>
<h1 style="font-size: 15px;">Rekening Tujuan : </h1>
<input type="text" name="rekeningtujuan" placeholder="BCA/MANDIRI"><br>
<h1 style="font-size: 15px;">No. Rekening User : </h1>
<input type="text" name="norekening" placeholder="No. Rekening"><br>
<h1 style="font-size: 15px;">Atas Nama : </h1>
<input type="text" name="namauser" placeholder="Nama"><br>

<h1  style="font-size: 15px;">Alamat : </h1>
<input type="text" name="alamatuser" placeholder="Alamat"><br>
<input hidden="hidden" type="text" name="totalharga2" value="<?php echo $row['total'];?>">
<br><br>


<button class="btn btn-info">Selesai</button>
<input hidden="hidden" type="text" name="user" value="<?php echo $id;?>">
</form>

<form style="display: inline;" action="processor/deletebayar.php" method="post">
<a href="cart.php"><button class="btn btn-danger">Cancel</button></a>
</form>
</div>

<?php 
}}
 $conn->close();
  ?>
</body>
</html>
