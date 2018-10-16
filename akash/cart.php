<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
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
         <div class="fea">
             <h1><center>Shopping Cart</center></h1><br />
         </div>
        <form method="POST" action="userinfo.php">
        <div class="boxed">
         <div class="body">
             <h3><i>
                 
<?php
session_start();
if (isset($_POST['product'])){
     $a=$_POST['product'];
    echo "$a";
    $_SESSION['product']="$a";
}
echo "<br>";
if (isset($_POST['price'])){
    $b=$_POST['price'];
    echo "$b";
        $_SESSION['price']="$b";  
}
                     ?>
                 </i></h3>
         </div>
             <input class="submit" type="submit" name="submit" value="Buy Now">
        </div>
        </form>
            </div>
    </body>
</html>