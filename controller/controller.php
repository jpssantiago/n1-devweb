<?php
define('ROOT_PATH', dirname(__FILE__));

include_once(ROOT_PATH.'/../model/connection_model.php');
include_once(ROOT_PATH.'/../model/destination_dao.php');
include_once(ROOT_PATH.'/../model/hotel_dao.php');
include_once(ROOT_PATH.'/../model/checkout_dao.php');
include_once(ROOT_PATH.'/../model/feedback_dao.php');

$connectionModel = new ConnectionModel();
$connection = $connectionModel->connect();

$destinationDAO = new DestinationDAO();
$hotelDAO = new HotelDAO();
$checkoutDAO = new CheckoutDAO();
$feedbackDAO = new FeedbackDAO();

if (isset($_POST['send_feedback'])) {
    $feedbackDAO->sendFeedback(
        $connection,
        $_POST['name'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['message'],
    );
}

if (isset($_POST['checkout'])) {
    $checkoutDAO->saveCheckout(
        $connection,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone_number'],
        $_POST['room_id'],
        $_POST['total_value'],
        $_POST['initial_date'],
        $_POST['final_date'],
        $_POST['current_date'],
    );
}

?>