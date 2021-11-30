<?php
define('ROOT_PATH', dirname(__FILE__));

include_once(ROOT_PATH.'/../model/connection_model.php');
include_once(ROOT_PATH.'/../model/destination_model.php');
include_once(ROOT_PATH.'/../model/hotel_model.php');
include_once(ROOT_PATH.'/../model/checkout_model.php');

$connectionModel = new ConnectionModel();
$connection = $connectionModel->connect();

$destinationModel = new DestinationModel();
$hotelModel = new HotelModel();
$checkoutModel = new CheckoutModel();

?>