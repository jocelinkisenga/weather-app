<?php
include_once "autoloader.php";
 if (isset($_GET['chercher'])) {
   if (!empty($_GET['city'])){
     $city= explode(" ",trim($_GET["city"]));
     $api->searchCity($city);
   }
   else {
     
     header('location:404.php');
   }
 }