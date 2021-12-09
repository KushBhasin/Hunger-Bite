<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5; url=homepage\homepage.html">
    <title>Dashboard</title>
    <style>
/*body {
  background-image: url("brooke-lark-wMzx2nBdeng-unsplash.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.chef{
  position: absolute;
  color:white;
  top:160px;
  left:38%;
  text-align:center;

}
.container {
  position: absolute;
  left:250px;
  margin: 1% auto;
  text-align: center;
  color: black;
}
.centered {
  position: absolute;
  font-family: 'Indie Flower', cursive;
  font-size:12px;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
}*/

</style>
    <link rel="stylesheet" href="dashboard.css">

</head>
<body>


    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>
    <!--<img src="chef.png" alt=""  style="width:20%;" class="chef">
    <div class="container">
  <img src="balloon-150981_1280.png" alt="" style="width:25%;">
  <div class="centered"><?php echo"<h2> Welcome ".$_SESSION['username']."<br> to Hunger Bite!</h2>" ?></div>
</div>-->
<div id="loading-wrapper">
  <div id="loading-text">LOADING</div>
  <div id="loading-content"></div>

</div>


        <script src="main.js"></script>
    
</body>
</html>