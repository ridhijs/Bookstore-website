<?php
function cart(){
if(isset($_GET['add_cart'])){
$pro_id=$_GET['add_cart'];
$check_pro="select * from cart where userid$_SESSION['currentuser'] AND bookid=$pro_id";
$run_check=mysqli_query($conn,$check_pro);
if(mysqli_num_row($run_check)>0){
}
else{
$insert_pro="insert into user_book (userid,book_id) values ('$_SESSION['currentuser']','$pro_id')";
$run_pro=mysqli_query($conn,$insert_pro);
}
]


}
?>