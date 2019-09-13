<?php


if(empty($_POST){
    exit();
}

$paymesOrderId = $_POST['paymesOrderId'];
$orderId = $_POST['orderId'];
$type = $_POST['type'];
$message = $_POST['message'];
$price = $_POST['price'];
$currency = $_POST['currency'];


if($type == 'error'){
    echo $message;
}
elseif($type == 'success'){
	
	// orderId veya paymesOrderId değerine göre sisteminizde ödeme ile ilgili onaylandı güncellemesini yapabilirsiniz.
	// According to orderId or paymesOrderId value, you can update your system for payment.

    echo $message;
}