<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The BookStore- Best Book Deals You can get!</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/stylebook.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="index.php">The BookStore</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">
	<?php
	session_set_cookie_params(0);session_start();
	if(isset($_SESSION['currentuser']))
	{echo "".$_SESSION['currentuser'];$currentuser=$_SESSION['currentuser'];
	}
	?> </a><a href="logout.php"><span><strong>logout</strong></span></a>
      <div class="cl">&nbsp;</div>
      <span>Articles: <strong><?php 
if(isset($_SESSION['currentuser'])){
include("connect.php");
$sql6="select * from cart where customername='$currentuser'";
$run6=mysqli_query($conn,$sql6);
$rowcount=mysqli_num_rows($run6);
echo $rowcount;}else{echo"0";}
 ?></strong></span> &nbsp;&nbsp; <span>Cost: <strong>Rs.<?php  
if(isset($_SESSION['currentuser'])){
include("connect.php");
$sql6="select sum(price) from cart where customername='$currentuser'";
$run6=mysqli_query($conn,$sql6);
$row=mysqli_fetch_row($run6);
echo$row['0'];}
else {echo"0";}
?></strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="index.php">Home</a></li>	
        <li><a href="book.php" class="active">Books</a></li>
        <li><a href="library.php">Library</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      
	  <!-- Products -->
      <div class="products">
	  <h1>BEST CRIME & THRILLER BOOKS</h1><br/>
        <div class="cl">&nbsp;</div>
        <ul>
          <li> <a href="#"><img src="css/images/Thriller/bleeding.jpg" alt="" /></a>
            <div class="product-info">
              <h3>BLEEDING HEART SQUARE</h3>
              <div class="product-desc">
                <h4>Andrew Taylor's</h4>
                <p>Bleeding Heart Square<br />
                 </p>
                <strong class="price">Rs.499.00</strong> </div>
            </div>
          </li>
          <li> <a href="#"><img src="css/images/Thriller/bluelightening.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE LIGHTENING THIEF</h3>
              <div class="product-desc">
                <h4>Rick Riordan's</h4>
                <p>Percy Jackson and Lightening Thief<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
          <li class="last"> <a href="#"><img src="css/images/Thriller/death.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE DEATH OF LUCY KYTE</h3>
              <div class="product-desc">
                <h4>Nicola Upson's</h4>
                <p>The Death Of Lucy Kyte<br />
                </p>
                <strong class="price">Rs.389.00</strong> </div>
            </div>
          </li>
        </ul>
		<ul>
		 <li> <a href="#"><img src="css/images/Thriller/frozendead.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE FROZEN DEAD-A Crime ThrillerTh</h3>
              <div class="product-desc">
                <h4>Bernard Minier</h4>
                <p>The Frozen Dead<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
		   <li> <a href="#"><img src="css/images/Thriller/ghostrider.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE GHOSTRIDERS OF ORDEBEC</h3>
              <div class="product-desc">
                <h4>Fred Vargas'</h4>
                <p>GhostRiders Of Ordebec<br />	
                </p>
                <strong class="price">Rs.699.00</strong> </div>
            </div>
          </li>
		    <li class="last"> <a href="#"><img src="css/images/Thriller/heartstone.jpg" alt="" /></a>
            <div class="product-info">
              <h3>HEARTSTONE-DISILLUSION & REVELATION</h3>
              <div class="product-desc">
                <h4>C. J. SANSOM'S</h4>
                <p>HEARTSTONE<br />
                </p>
                <strong class="price">Rs.389.00</strong> </div>
            </div>
          </li>
		   <li> <a href="#"><img src="css/images/Thriller/houseseaend.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE HOUSE AT THE SEA'S END</h3>
              <div class="product-desc">
                <h4>ELLY GRIFFITH'S</h4>
                <p>THE HOUSE AT THE SEA'S END<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
		   <li> <a href="#"><img src="css/images/Thriller/hypothermia.jpg" alt="" /></a>
            <div class="product-info">
              <h3>HYPOTHERMIA</h3>
              <div class="product-desc">
                <h4>ARNALDUR INDRIDASON</h4>
                <p>HYPOTHERMIA-REYKJAVIK MYSTERY<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
		    <li class="last"> <a href="#"><img src="css/images/Thriller/spilnter.jpg" alt="" /></a>
            <div class="product-info">
              <h3>SPLINTER</h3>
              <div class="product-desc">
                <h4>SEBASTIAN FITZEK'S</h4>
                <p>SPLINTER-AN INTERNATIONAL PHENOMENON<br />
                </p>
                <strong class="price">Rs.499.00</strong> </div>
            </div>
          </li>
		</ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box search">
        <h2>Search by <span></span></h2>
        <div class="box-content">
          <form action="index.php" method="post">
            <label>Keyword</label>
            <input type="text" class="field" />
            <label>Category</label>
           <input type="text" name="category1" placeholder="type here" >

            <div class="inline-field">
              <label>Price</label>
              <select class="field small-field">
                <option value="">$10</option>
              </select>
              <label>to:</label>
              <select class="field small-field">
                <option value="">$50</option>
              </select>
            </div>
							
            <input type="submit" class="search-submit" value="Search" />
            
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories">
        <h2>Categories <span></span></h2>
        <div class="box-content">
          <ul>
            <li><a href="Scifi.php">Sci-Fi</a></li>
            <li><a href="thriller.php">Thriller</a></li>
            <li><a href="romantic.php">Romantic</a></li>
            <li><a href="comedy.php">Comedy</a></li>
            <li><a href="kids.php">Kids' Favourite</a></li>
            <li><a href="biography.php">Biography</a></li>
            <li><a href="hindi.php">Hindi</a></li>
            <li><a href="english.php">English</a></li>
            <li><a href="journal.php">Journals</a></li>
            <li><a href="encyclopaedia.php">Encyclopaedia</a></li>
            <li><a href="dictionary.php">Dictionary</a></li>
            </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
          <li class="last"><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products -->
    <!-- Text Cols -->
    <div class="cols">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico3">The BookStore</h3>
        <p>Mumbai, Mumbai, Mumbai, Mumbai, Mumbai-400077, India</p>
      </div>
      <div class="col">
	     <h3 class="ico ico2">The BookStore</h3>
        <p>Mumbai, Mumbai, Mumbai, Mumbai, Mumbai-400077, India</p>
      </div>
	  <div class="col">
        <h3 class="ico ico1">The BookStore</h3>
        <p>Mumbai, Mumbai, Mumbai, Mumbai, Mumbai-400077, India</p>
      </div>
      <div class="col col-last">
        <h3 class="ico ico4">The BookStore</h3>
        <p>Mumbai, Mumbai, Mumbai, Mumbai, Mumbai-400077, India</p>
      </div>
      <div class="cl">&nbsp;</div>
    </div>	
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="left"> <a href="index.php">Home</a> <span>|</span> <a href="support.html">Support</a> <span>|</span> <a href="account">My Account</a> <span>|</span> <a href="contact.html">Contact Us</a> </p>
    <p class="right"> &copy; 2017 The BookStore. Design by Ridhi Shah</a> </p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>
