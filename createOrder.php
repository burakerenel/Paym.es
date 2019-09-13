<?php

    $url = 'https://api.paym.es/order_create';
    $data_array = array(
    	'secret'=>'{SecretKey}', // teknik@paym.es tarafından ulaştırılan secret keyiniz.
    	'orderId'=>'100',	// Kendi sisteminizdeki ödeme işlem numarasıdır.
    	'price'=>10.00,
    	'currency'=>'TRY',
    	'productName'=>'Mavi Kalem',
        'buyerName'=>'Burak Erenel',
        'buyerPhone'=>'905555555555',
        'buyerEmail' => 'info@burakerenel.com',
        'buyerAddress'=>'Kadıköy'
    );
    $data = json_encode($data_array);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $veri);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_SSLVERSION, 6);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $curl_exec = curl_exec ($ch);
    curl_close ($ch);
    $result = json_decode($curl_exec);

    if($result->status == 'error')
        echo $result->message;
    elseif($result->status == 'return_url'){
        // Türkçe - Ödeme işleminin takibi için numarayı ödemeyle ilişkilendirin: $result->paymesOrderId
        // English - Record the payment number for the transaction: $result->paymesOrderId
        Header('Location: '.$result->returnUrl);
    }