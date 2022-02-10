<?php

include "Classe.php";
if(isset($_GET['city']) && isset($_GET['country']))
{
  
$getcity = $_GET['city'];
$getcountry = $_GET['country'];
$location = "'". $getcity ."', '". $getcountry ."'";

$kolkatadata = new Currentweather;
//$temperature = $kolkatadata->temperature($kolkatadata->locationbycity('Kolkata', 'In'));
$temperature = $kolkatadata->temperature($kolkatadata->locationbycity($getcity, $getcountry));
$humidity = $kolkatadata->humidity($kolkatadata->locationbycity($getcity, $getcountry));
$pressure = $kolkatadata->pressure($kolkatadata->locationbycity($getcity, $getcountry));
$windspeed = $kolkatadata->windspeed($kolkatadata->locationbycity($getcity, $getcountry));
$winddir = $kolkatadata->winddir($kolkatadata->locationbycity($getcity, $getcountry));
$cityname = $kolkatadata->cityname($kolkatadata->locationbycity($getcity, $getcountry));
$countrycode = $kolkatadata->countrycode($kolkatadata->locationbycity($getcity, $getcountry));
$description = $kolkatadata->description($kolkatadata->locationbycity($getcity, $getcountry));
$visibility = $kolkatadata->visibility($kolkatadata->locationbycity($getcity, $getcountry));
$sunrise = $kolkatadata->sunrise($kolkatadata->locationbycity($getcity, $getcountry));
$sunset = $kolkatadata->sunset($kolkatadata->locationbycity($getcity, $getcountry));
$cloudsall = $kolkatadata->cloudsall($kolkatadata->locationbycity($getcity, $getcountry));

echo $temperature;
echo $cityname;

}
else {
  echo "URL value not set";
}