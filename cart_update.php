<?php

global $count;$count=0;
global $count2;$count2=0;
$conn;

function display($dynamic_var,$dynamic_var1,$dynamic_var2,$dynamic_var3,$num3){
	{
			echo'<tr>
    <td>'.$dynamic_var.'</td>
    <td>'.$dynamic_var1.'</td>		
    <td>'.$dynamic_var2.'</td>
	<td>
	<form action="cart_update.php" method="post">
				<input type="hidden" name="remove" value='.$dynamic_var3.' />
				<input type="submit" name="addcart" class="login login-submit" value="remove"/>
	</form>
	</td>
              </tr>';
	}	
	
          
}
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
</style>
<title>The BookStore- Best Book Deals You can get!</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/stylelogin.css" type="text/css" media="all" />
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
        <li><a href="book.php">Books</a></li>
        <li><a href="library.php">Library</a></li>
        <li><a href="login.php" class="active">Login</a></li>
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
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
  

  <?php

  if(isset($_SESSION['currentuser'])){
include("connect.php");
if(isset($_POST['remove'])){
	
	//echo"in remove";
}
else{
	//echo "out remove";
// Check connection
$pro_id=intval($_POST['pro_id']);

$sql_3="SELECT * FROM books where bid=$pro_id limit 1";
$result_3 =mysqli_query($conn,$sql_3);
$row3=mysqli_fetch_assoc($result_3);
$pro_id=$row3["bid"];// echo $pro_id;
$price=$row3["price"];//echo $price;
$boname=$row3["bname"];//echo $boname;
$author1=$row3["authorname"];//echo $author1;echo $currentuser;
$newrecord="INSERT INTO cart(customername,pro_id,bookname,author,price)
 VALUES( '$currentuser',$pro_id, '$boname', '$author1',$price)";
 $run3=mysqli_query($conn,$newrecord);
//echo"item".$pro_id." added to cart";
 }
 

include("connect.php");
if(isset($_POST['remove'])){//echo"in remove";
$delete=intval($_POST['remove']);//echo$delete;
	$sqli=" delete  FROM cart where cartno=$delete ";
	$resulti =mysqli_query($conn,$sqli);
}
else{
// Check connection
$pro_id=intval($_POST['pro_id']);
if (mysqli_connect_errno()) {
    die("Connection failed: " );
} 
$sql3="SELECT * FROM books where bid=$pro_id limit 1";
$result3 =mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result3);
$pro_id=$row['bid']; 
$price=$row['price'];
$bname=$row['bname'];
$author=$row['authorname'];


 $insert_pro1="insert into users_books(userid,bookid,price)
 values ('$currentuser',$pro_id,$price)";
$run_pro1=mysqli_query($conn,$insert_pro1);

}
  }
 ?>

<table id="to1">
  <tr>
    <th>book name</th>
    <th>author name Name</th>		
    <th>Price</th><th/>
  </tr>
<?php
 if(isset($_SESSION['currentuser'])){
$num3=0;

$sql2="select * from cart where customername='$currentuser' ";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_num_rows($result2);
while ($num3<$row2)
    {  
				include("connect.php");
				// Check connection

				if (mysqli_connect_errno()) {
					die("Connection failed: " );
				} 
				$num=0;
				//$sql1="SELECT * FROM books JOIN users_books ON bid=bookid GROUP BY bookid ORDER BY COUNT(*) ";
				$sql1="SELECT * from cart where customername='$currentuser'";
				$result1=mysqli_query($conn,$sql1);
				//$row1=mysqli_fetch_assoc($result1);
				while ($num<=$count)
					{$row12=mysqli_fetch_assoc($result1);
					$GLOBALS['count2'] =$row12['cartno'];
					$num++;
					}

				//$GLOBALS['count1'] =$row1[$count];
				$sql20="SELECT * FROM cart where cartno=$count2 limit 1";

				$result20 =mysqli_query($conn,$sql20);
				$rcount=mysqli_num_rows($result20);
				if($rcount>0){
				$row=mysqli_fetch_assoc($result20);
				$dynamic_var=$row['bookname'];//echo"in query".$dynamic_var;
				$dynamic_var1=$row['author'];
				$dynamic_var2=$row['price'];
				$dynamic_var3=intval($row['cartno']);
				
				}
				

	 
	  
	  display($dynamic_var,$dynamic_var1,$dynamic_var2,$dynamic_var3,$num3);
	//$pro_id=$dynamic_var1;
 $GLOBALS['count']++;$num3++;
	}

		




 
 
echo'
<tr><td>total amount</td>
<td> ';
include("connect.php");
$sql6="select sum(price) from cart where customername='$currentuser'";
$run6=mysqli_query($conn,$sql6);
$row=mysqli_fetch_row($run6);
echo'='.$row['0'].'
</td>
</tr>
 </table>';}

?><?php if(isset($_SESSION['currentuser'])){}else{echo "<div class='products'></br>login first <a href='login.php'>login  </a>  </div>  ";}  ?><a href="index.php" >continue shoping</a> ;

	
	

	  <!-- Products -->
      <!--
	  <div class="products">
        <div class="cl">&nbsp;</div>
        <ul><h1>Library</h1><br/>
          <li> <a href="#"><img src="css/images/big1.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE DA VINCI CODE</h3>
              <div class="product-desc">
                <h4>Dan Brown's</h4>
                <p>The Da Vinci Code<br />
                 </p>
                <strong class="price">Rs.499.00</strong> </div>
            </div>
          </li>
          <li> <a href="#"><img src="css/images/big2.jpg" alt="" /></a>
            <div class="product-info">
              <h3>MEIN KAMPF</h3>
              <div class="product-desc">
                <h4>Adolf Hitler's</h4>
                <p>Mein Kampf Part 9<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
          <li class="last"> <a href="#"><img src="css/images/big3.jpg" alt="" /></a>
            <div class="product-info">
              <h3>2 STATES</h3>
              <div class="product-desc">
                <h4>Chetan Bhagat's</h4>
                <p>2 States-story of my marriage<br />
                </p>
                <strong class="price">Rs.389.00</strong> </div>
            </div>
          </li>
        </ul>
		<ul>
		 <li> <a href="#"><img src="css/images/big4.jpg" alt="" /></a>
            <div class="product-info">
              <h3>50 SHADES OF GREY-BestSeller</h3>
              <div class="product-desc">
                <h4>E. L. James'</h4>
                <p>Fifty Shades Of Grey<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
		   <li> <a href="#"><img src="css/images/big5.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE FAULT IN OUR STARS</h3>
              <div class="product-desc">
                <h4>John Green's</h4>
                <p>The Fault In Our Stars<br />	
                </p>
                <strong class="price">Rs.699.00</strong> </div>
            </div>
          </li>
		    <li class="last"> <a href="#"><img src="css/images/big6.jpg" alt="" /></a>
            <div class="product-info">
              <h3>Mutation</h3>
              <div class="product-desc">
                <h4>Robin Cook's</h4>
                <p>Mutation-The NY Times Best Seller<br />
                </p>
                <strong class="price">Rs.389.00</strong> </div>
            </div>
          </li>
		   <li> <a href="#"><img src="css/images/big7.jpg" alt="" /></a>
            <div class="product-info">
              <h3>WINGS OF FIRE</h3>
              <div class="product-desc">
                <h4>APJ Abdul Kalam's</h4>
                <p>Wings Of Fire-An Autobiography<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
		   <li> <a href="#"><img src="css/images/big8.jpg" alt="" /></a>
            <div class="product-info">
              <h3>STEVE JOBS</h3>
              <div class="product-desc">
                <h4>Walter Issacson & J.C. Latte's</h4>
                <p>Steve jobs-A Biography<br />	
                </p>
                <strong class="price">Rs.999.00</strong> </div>
            </div>
          </li>
		    <li class="last"> <a href="#"><img src="css/images/big9.jpg" alt="" /></a>
            <div class="product-info">
              <h3>THE AGE OF VIKINGS</h3>
              <div class="product-desc">
                <h4>Anders Winroth's</h4>
                <p>The Age Of Vikings-The Plunderer Era<br />
                </p>
                <strong class="price">Rs.499.00</strong> </div>
            </div>
          </li>
		</ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
	
    
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
