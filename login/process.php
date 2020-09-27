<?php
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$db = mysqli_connect("localhost","root","","login");

$result = mysqli_query($db, "select * from login where username = '$username' and password = '$password'")
                or die("Faild to query database " .mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username']== $username && $row['password'] == $password){
    echo "Login success!!! Welcome " .$row['username'];
} else {
    echo "Faild to login!";
}

?>