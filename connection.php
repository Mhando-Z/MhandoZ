<?php

$connection = mysqli_connect("localhost", "root", "", "formregistration");

if ($connection === false) {
    die("ERROR: Could not connect" .mysqli_connect_error());
}

echo "<h1>CONNECTED SUCCESSFULLY</h1><br>";



$fname = $_POST['fname'];
$mname = $_POST['mname'];
$sname = $_POST['lname'];
$unamee = $_POST['uname'];
$pass = $_POST['val1'];
//$passwd = md5($_POST['val2']);

$cv = $_POST['cv'];
//$fileLocation = $_FILES['cv']['tmp_name'];
//$folder = "C:\wamp64\www\MHANDOZ\cvfolder";

$email = $_POST['email'];
$phone =$_POST['pnumber'];
$facebook = $_POST['fb'];
$twitter = $_POST['tw'];
$instagram = $_POST['ig'];



//if (move_uploaded_file($fileLocation, $folder.$cv)) {

$sql = "INSERT INTO foru (firstname, middlename, Lastname, username, Password, cv, email, phone, facebook, twitter, instagram)
VALUES ('$fname', '$mname', '$sname', '$unamee', '$pass','$cv','$email','$phone','$facebook', '$twitter', '$instagram')";
//}


if(mysqli_query($connection,$sql)) {
    echo "<h2>Records inserted successfully<h2><br>";
    echo "WELCOME $unamee <br>";
    echo "Click LOGIN to Sign in<br>";
    include("log.html");




} else {
    echo "ERROR: Could not execute entry" .mysqli_error($connection);
}

mysqli_close($connection);
?>
