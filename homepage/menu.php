<?php
session_start();

if(isset($_POST['add-to-cart'])){
    $_SESSION['cart'][] = array(
        'id' => rand(100,10000),
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quan' => $_POST['quan'],
        'img' => $_POST['img'],
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Hunger-Bites</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 1000px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <style>
.product-box {
  margin-bottom: 30px;
}
.product-box img {
  width: 100%;
  margin-bottom: 30px;
}
.product-box h2 {
  color: #333;
}
.product-box h3 {
  color: #333;
  margin-bottom: 20px;
}
.product-box h3 span {
  color: #451ef1;
}
.product-box a {
  display: inline-block;
  width: 100%;
  padding: 15px 10px;
  color: white;
  background-color: #451ef1;
  text-align: center;
}
.product-box form input {
  padding: 5px 10px;
  border: 1px #cacaca solid;
  width: 100%;
  margin-bottom: 2px;
}
.product-box form button {
  display: inline-block;
  width: 100%;
  padding: 15px 10px;
  color: white;
  background-color: #451ef1;
  text-align: center;
  border: none;
}
    </style>
</head>
<body>
    
    <section class="navigation">
        <div id="menu-logo">
            <a href="homepage.html" target="_blank">
                <img src="circle-cropped.png" alt="Hangries-logo">
            </a>
        </div>
        <nav class="navigation-bar">
            <ul>
                <li class="item"><a href="#featured">Dishes</a></li>
                <li class="item"><a href="#sweet">Dessert</a></li>
                <li class="item"><a href="about-us.html">About Us</a></li>
                <li class="item"><a href="#footer">Contact</a></li>
                <li class="item"><h1><a id="cart" href="checkout.php"><i class="fa fa-shopping-cart"></i><span>
                <?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{ echo '0';} ?>

                </span>
                </a></h1></li>
            </ul>
        </nav>
        
    </section>
    <div class="product-box">
        <img src="<?php echo $img;?>">
        <h2><?php echo $row['p_name'];?></h2>
        <h3>PKR: <span><?php echo $row['p_price'];?></span></h3>
        <form action="menu.php" method="post">
            <input type="number" name="quan" min="1" max="5" value="1" placeholder="Quantity" required>
            <input type="hidden" name="img" value="<?php echo $img;?>" placeholder="Name" required>
            <input type="hidden" name="name" value="<?php echo $row['p_name'];?>" placeholder="Name" required>
            <input type="hidden" name="price" value="<?php echo $row['p_price'];?>" placeholder="price" required>
            <button type="submit" name="add-to-cart">Add To Cart</button>
        </form>
    </div>
    
    <!-- <section id="featured">
        <div class="container">
            <h2 class="h-primary">Dishes</h2>
            <div class="split">
                <div>
                    <a href="#" class="featured-item">
                    <img src="chhole.jpg" alt="chhole" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 50</span> Chole Bhature</p>
                    <button class="btn featured-details">Order Now</button>
                    </a>
                </div>
                <a href="#" class="featured-item">
                    <img src="dosa.jpg" alt="dosa" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 50</span> Savory Dosa</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="malai-kofta.jpg" alt="malai-kofta" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 50</span> Malai Kofta</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="tofu-tikka-masala.jpg" alt="tikka-masala" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Tofu Tikka Masala</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="rajma.jpg" alt="rajma" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Rajma Dal</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
               FURTHER DISHES TO BE DISPLAYED-->
                <!-- <a href="#" class="featured-item">
                    <img src="korma.jpg" alt="korma" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Korma</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="baigan-bharta.jpg" alt="baigan-bharta" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Baigan-Bharta</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="mattar-paneer.jpg" alt="mattar-paneer" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Mattar Paneer</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="veg-biryani.jpg" alt="veg-biryani" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Veg Biryani</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="sabudana-vada.jpg" alt="sabudana-vada" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Sabudana Vada</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item" >
                    <img src="medu-vada.jpg" alt="medu-vada" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Medu Vada</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="dhokla.jpg" alt="dhokla" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Dhokla</p>
                    <button class="btn featured-details">Order Now</button>
                </a>

                
                                
            </div>
        </div>
    </section>
    <section id="sweet">
        <div class="container">
            <h2 class="h-primary">Dessert</h2>
            <div class="split">
                <a href="#" class="featured-item">
                    <img src="gajar-ka-halwa.jpg" alt="gajar-ka-halwa" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Gajar Ka Halwa</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="barfi.jpg" alt="barfi" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Barfi</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="gulab-jamun.jpg" alt="gulab-jamun" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Gulab Jamun</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="kaju-katli.jpg" alt="kaju-katli" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Kaju Katli</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="ras-malai.jpg" alt="ras-malai" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Ras Malai</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="shrikhand.jpg" alt="shrikhand" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Shrikhand</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="laddu.jpg" alt="laddu" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Laddu</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="kulfi.jpg" alt="kulfi" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Kulfi</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="modak.jpg" alt="modak" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Modak</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="mysore-pak.jpg" alt="mysore-pak" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 0</span>Mysore Pak</p>
                    <button class="btn featured-details">Order Now</button>
                </a>
                <a href="#" class="featured-item">
                    <img src="phirni.jpg" alt="phirni" class="featured-image">
                    <p class="featured-details"><span class="name">Rs 60</span>Phirni</p>
                    <button class="btn featured-details">Order Now</button>
                </a>



            </div>
        </div>
    </section> -->


    <section id="footer">
        
        <h2 class="footer-title">Contact</h2>
        <h3 class="h-secondary">Visit Us Today</h3>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday to Friday: 9AM to 9PM</p>
                <p><i class="fa fa-clock-o"></i>Saturday to Sunday: 8AM to 11PM</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p><i class="fa fa-map-marker"></i>#69 abc Colony, xyz city IN</p>
                <p><i class="fa fa-paper-plane"></i>example@website.com</p>
                <p><i class="fa fa-phone"></i>+01 123456789</p>
            </div>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>Copyright Hunger-Bites </p>
        </div>
    </section>

    <div class="select">

    </div>
</body>
</html>

<!-- <script type="text/javascript" src="store.js"></script> -->
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});
</script>