<?php
define('ROOT_PATH', dirname(__FILE__));

include_once(ROOT_PATH.'/../model/connection_model.php');
include_once(ROOT_PATH.'/../model/destination_model.php');

$connectionModel = new ConnectionModel();
$connection = $connectionModel->connect();

$destinationModel = new DestinationModel();

?>