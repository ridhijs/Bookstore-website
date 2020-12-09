<?php
include("connect.php");
// Check connection

if (mysqli_connect_errno()) {
    die("Connection failed: " );
} 
$num=0;
//$sql1="SELECT * FROM books JOIN users_books ON bid=bookid GROUP BY bookid ORDER BY COUNT(*) ";
$sql1="SELECT * from users_books GROUP BY bookid ORDER BY COUNT(*) desc";
$result1=mysqli_query($conn,$sql1);
//$row1=mysqli_fetch_assoc($result1);
while ($num<=$count)
    {$row1=mysqli_fetch_array($result1);
    $GLOBALS['count1'] =$row1['bookid'];$num++;
    }

//$GLOBALS['count1'] =$row1[$count];
$sql="SELECT * FROM books where bid=$count1 limit 1";

$result =mysqli_query($conn,$sql);
$rcount=mysqli_num_rows($result);
if($rcount>0){
$row=mysqli_fetch_array($result);
$dynamic_var=$row['bid'];//echo"in query".$dynamic_var;
$dynamic_var1=$row['bname'];
$dynamic_var2=$row['authorname'];
$dynamic_var3=$row['price'];
$dynamic_var4=$row['image'];
}
else
{
$dynamic_var1='no books';	
}
	mysqli_free_result($result);
	mysqli_free_result($result1);
	//mysqli_free_result($rcount);
	//mysqli_free_result($row);
mysqli_close($conn);

?>