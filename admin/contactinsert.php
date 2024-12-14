<?php
// 1st connection assault

include("../connection.php");

// 2nd assigning values to variables

$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$submit = $_POST['submit'];

if(isset($submit)){

// 3rd query assault

$query = "INSERT INTO contactme VALUES ('','$name','$email','$message')";

$ins=mysqli_query($conn,$query);

}
if( $ins == 1){

    echo "<script>alert('Submitted');</script>";
}
else{

echo" Byanze";
}
?>

