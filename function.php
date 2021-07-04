<?php

$connection=mysqli_connect("localhost","root","","formregistration");
if ($connection === false) {
    die("ERROR: Could not connect" .mysqli_connect_error());
}


function login($connection)
{
  if (isset($SESSION['Username'])){
    $id =$SESSION['Username'];
    $query="SELECT * from foru where Username ='$id' limit 1";

    $resuslt -mysqli_query($connection,$query);
    if ($resuslt&& mysqli_num_rows($resuslt)>0) {
      $Usename=mysqli_fetch_assoc($results);
      return $Usename;

    }
  }
}
  header("location:log.html");
  die;

?>
