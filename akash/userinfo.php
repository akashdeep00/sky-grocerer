<html>
    <head>   <link rel="stylesheet" type="text/css" href="info.css"></head>
<body>
       <div id="wrapper">
<div id="header">
<div id="subheader">
<div class="container">
<p>grocery store</p>
<a href="#">Guest</a><a href="#">Consumer</a><a href="#">Download App</a><a href="#">Help</a>
</div>
</div>
<div id="main-header">
<div id="logo">
<span id="ist">SKY</span><span id="iist">Grocerer.com</span>
</div>
    <div id="search">
    <form action="">
       
        <input class="search-area" name="text" placeholder="search products">
        <input class="search-btn" type="submit" name="submit" value="SEARCH">
        </form>
    </div>
    <div id="user-menu">
    <li><a href="#">Cart</a></li>
        <li><a href="login.html">Login</a></li>
    </div>
    </div>
          </div>
    </div>
    <div id="navigation">
    <nav>
        <a href="a.html">Home</a>
        <a href="#">New launches</a>
        <a href="organic.html">Organic</a>
        <a href="#">Gift cards</a>
        <a href="#">Orders</a>
        </nav>
        <div class="boxed">
    <form method="POST" action="checkout.php">
        <h1>
    <div class="info">
        <center>Product:
        <?php
        session_start();
        $a=$_SESSION['product'];
        echo "$a";
            $_SESSION['prod']=$a;
            echo "<br>";
             $b=$_SESSION['price'];
        echo "$b";
             $_SESSION['pri']=$b;
            ?><hr></center>
            </div></h1>
        <h2>
             <b>Name  </b>   <input class="text1" name="nam1" placeholder="Name"required><br><br>
             <b>Email</b><input class="text3" name="nam3" placeholder="Email" required><br><br>
             <b>Mobile No.</b><input class="mobileno" type="number" name="nam5" placeholder="Mobile no." required><br><br>
            <b>Address</b><input class="address" type="text" name="address" placeholder="Address" required><br><br>
            <b>Pincode</b><input class="pincode" type="pincode" name="pincode" placeholder="Pincode" required><br><br> 
              <input class="submitt" type="submit" name="submit" value="Checkout">
        </h2>  </form>
            </div></div>
    </body></html>