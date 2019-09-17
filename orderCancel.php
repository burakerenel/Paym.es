<?php
$url = 'https://api.paym.es/order_cancel/{paymesOrderId}';
$data_array = array(
    'secret'=>{SecretKey}, // teknik@paym.es tarafından ulaştırılan secret keyiniz.
);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_array));
$curl_exec = curl_exec ($ch);
curl_close ($ch);
$result = json_decode($curl_exec);
if($result->type == 'error')
    echo $result->message;
elseif($result->type == 'success'){
    echo $result->message;
}
?>