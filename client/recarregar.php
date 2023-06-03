<?php

   include_once './composer/autoload.php'; 
 
   MercadoPago\SDK::setAccessToken("TEST-#");
    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 1;
    $payment->description = "test";
    $payment->payment_method_id = "pix";
    $payment->payer = array(
        "email" => "hgeorgehenrique@gmail.com",
        "first_name" => "george",
        "last_name" => "henrique",
        "identification" => array(
            "type" => "1",
            "number" => "81998506957"
        ),
        "address"=>  array(
            "zip_code" => "06233200",
            "street_name" => "Av. das Nações Unidas",
            "street_number" => "3003",
            "neighborhood" => "Bonfim",
            "city" => "Osasco",
            "federal_unit" => "SP"
        )
    );

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id,
        'ticket_url' => $payment->point_of_interaction->transaction_data->ticket_url,
        'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
        'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64
    );

    //echo json_encode($response);
	
?>