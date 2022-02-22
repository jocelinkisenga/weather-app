<?php
/**
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
 */
 

if(isset($_GET['city']))
{
  
$getcity = $_GET['city'];
$location = "'". $getcity ."'";


$temperature = $data->temperature($data->locationbycity($getcity));
$humidity = $data->humidity($data->locationbycity($getcity));
$pressure = $data->pressure($data->locationbycity($getcity));
$windspeed = $data->windspeed($data->locationbycity($getcity));
$winddir = $data->winddir($data->locationbycity($getcity));
$cityname = $data->cityname($data->locationbycity($getcity));
$countrycode = $data->countrycode($data->locationbycity($getcity));
$description = $data->description($data->locationbycity($getcity));
$visibility = $data->visibility($data->locationbycity($getcity));
$sunrise = $data->sunrise($data->locationbycity($getcity));
$sunset = $data->sunset($data->locationbycity($getcity));
$cloudsall = $data->cloudsall($data->locationbycity($getcity));

}
else {
  header('location:404.php');
}