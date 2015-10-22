<?php
require_once "./vendor/autoload.php";

$obj = new \Geocoder\Geocoder();
print_r($obj);

$conf = new \Modelo\Conferencia();
print_r( $conf );


?>