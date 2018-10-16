<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="cart";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<html>
    <head><title>
        </title>
    </head>
    <body>
    <div class="cotainer" style="width:700px;">
        <h3 align="center">Shopping Cart</h3><br />
        <?php
        $query = "SELECT * FROM prod ORDER BY id ASC";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
        ?>
        <div class="col-md-4">
        <form method="post" action="d.php?add&id=<?php echo $row["id"]; ?>">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; paddig:16px;" align="center">
                <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                <h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>
          <?php  }
                }
        ?>
        </div>
            </form>
            </div>
        </div>
    </body> 
    </html>