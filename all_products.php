
<!Doctype>
<?php

include("functions/functions.php");

?>

<html>
<head>
<title>Shopping Bags.com</title>
<link href="styles/style.css" rel="stylesheet" media="all"/>
</head>
<body>
<div class= "main_wrapper">
<div class = "header_wrapper" >
<img id = "logo" src = "images/logo.png" />
<img id ="banner" src ="images/ad_banner.png"/>
<img id= "banner" src ="images/ad_banner2.jpg"/>

</div>
<!-- I will include the menu bar in content area-->

<div class= "menubar">
<ul id= "menu">
<li><a href="index.php">Home</a></li> 
<li><a href="all_products.php">All Products</a></li> 
<li><a href="#">My Account</a></li> 
<li><a href="#">Sign Up</a></li> 
<li><a href="#">Shopping Cart</a></li> 
<li><a href="contact.php">Contact Us</a></li> 

<div id= "form">
<form method= "get" action= "search_products.php" enctype="multipart/form-data">
<input type = "text" name="user_query" placeholder="search a product"/>
<input type = "submit" name="search" value="search"/>
</form>
</div>
</ul>
</div>

<div class = "content_wrapper">
<div id ="sidebar" >
<div id ="sidebar_title">Categories</div>
<ul id ="cats">
<?php getCats(); ?>
</ul>
<div id ="sidebar_title">Brands</div>
<ul id ="cats">
<?php getBrands(); ?>
</ul>
</div>
<div id = "content_area">
<div id = "shopping_cart">
<span style = "float :right; font-size: 18px; padding:5px; line-height: 40px;" ><b style = "color: yellow; margin: 5px" >Happy Shopping! </b><a href = "cart.php"> <b>Go To Cart</b></a> 
</span> 
</div>
<div id= "products_box">
<?php
$get_pro="select * from Products ";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro))
          {
$pro_id=$row_pro['product_id'];
$pro_cat=$row_pro['product_cat'];
$pro_brand=$row_pro['product_brand'];
$pro_price=$row_pro['product_price'];
$pro_title=$row_pro['product_title'];
$pro_image=$row_pro['product_image'];

echo"

<div id='single_product'>
<h3>$pro_title</h3>
<img src= 'admin/product_images/$pro_image' width='180' height='170'/>
<p><b>$ $pro_price</b></p>
<a href ='details.php?pro_id=$pro_id' style= 'float:left;'>Details</a>
<a href='index.php?pro_id=$pro_id' ><button style='float:right'>Add to Cart</button></a>
</div>
";
 
      }
?>
</div>
</div>
<div id= "footer">
<h2 style ="text-align: center; padding-top:70px;">&copy;2015 by www.Shopping Bags.com</h1>
</div>
</div>
</div>
</body>
</html>