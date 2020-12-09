<?php

global $count;$count=0;
$count1=0;
$conn;

function display($dynamic_var,$dynamic_var1,$dynamic_var2,$dynamic_var3,$dynamic_var4,$num3){
	{
			echo'<li class="last">
		  <a href="#"><img src="'. $dynamic_var4.'" alt="" /></a>
            <div class="product-info">
              <h3>'.$dynamic_var1.'</h3>
              <div class="product-desc">
                <h4>'.$dynamic_var2.'</h4>
                <p>'.$dynamic_var1.'<br /></p>
                <strong class="price">'.$dynamic_var3.'</strong>
				<p><form action="cart_update.php" method="post">
				<input type="hidden" name="pro_id" value='.$dynamic_var.'/>
				<input type="submit" name="addcart" class="login login-submit" value="Add to cart"/>
				</form></p>	
				</div>
            	</div></li>';
	}	
	
          
}
/*function cart(){
if(isset($_GET['add_cart'])){
$pro_id=$_GET['add_cart'];
$check_pro="SELECT *
 FROM users_books 
 WHERE userid=kaushal
 AND bookid=$pro_id";
$run_check=mysqli_query($conn,$check_pro);
if(mysqli_num_row($run_check)>0){
}
else{
$insert_pro="insert into users_books(userid,bookid)
 values (kaushal,$pro_id)";
$run_pro=mysqli_query($conn,$insert_pro);
}
}


}*/
?>

<html>
<head>

<title>The BookStore- Best Book Deals You can get!</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
$run61=mysqli_query($conn,$sql6);
$row=mysqli_fetch_row($run61);
echo$row['0'];}
else {echo"0";}
?></strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="index.php" class="active">Home</a></li>	
        <li><a href="book.php">Books</a></li>
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
      <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide3.jpg" alt="" /></a></li>
            <li><a href="#"><img src="css/images/slide4.jpg" alt="" /></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
      <div class="products">
        <div class="cl">&nbsp;</div>
       <ul>
	   <?php
include("connect.php");
// Check connection

if (mysqli_connect_errno()) {
    die("Connection failed: " );
} 
$num3=0;
if(isset($_POST['category1']))
{$category1=$_POST['category1'];echo$category1;
	$sql2=" select *from books where category='$category1'";}
else{$sql2="select * from books";}
$result_2=mysqli_query($conn,$sql2);
$row2=mysqli_num_rows($result_2);//echo $row2;
while ($num3<$row2)
    {  // echo"in loop". $num3;
	 if(isset($_POST['category1'])){
	  include("query2.php");}
	  else{include("query.php");}
	  //include("query.php");
	  display($dynamic_var,$dynamic_var1,$dynamic_var2,$dynamic_var3,$dynamic_var4,$num3);
	//$pro_id=$dynamic_var1;
 $GLOBALS['count']++;$num3++;

		
    }
          
		?> 
		
			
	
          
           
          
		 
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