<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection succesfull";
}
else{
    echo "No connection";
}

mysqli_select_db($con,'e-learn');
$user=$_POST['user'];
$email=$_POST['email'];
$number=$_POST['number'];
$comment=$_POST['comment'];


$query="INSERT INTO `userinfo`(`id`, `user`, `email`, `number`,`comment`) VALUES ('$user','$email','$number','$comment')";
echo "$query";

mysqli_query($con,$query);
// header('location:index.php')
?>