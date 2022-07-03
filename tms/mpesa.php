<?php
  $consumer_key = '6Xb5HxZcl1zkf0nw2wT2S4keS6fkGn50';
  $consumer_secret = 'FcfjY7jCZhgqp25v';
  $BusinessShortCode='174379';
  $LipaNaMpesaPasskey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
  $Amount='10';
  $PhoneNumber='254720287104';

$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
$credentials = base64_encode($consumer_key.':'.$consumer_secret);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$curl_response = curl_exec($curl);

$token= json_decode($curl_response)->access_token;
$timestamp='20'.date("ymdhis");
$password=base64_encode($BusinessShortCode.$LipaNaMpesaPasskey.$timestamp);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token));


$curl_post_data = array(
'BusinessShortCode' => $BusinessShortCode,
'Password' => $password,
'Timestamp' => $timestamp,
'TransactionType' => 'CustomerPayBillOnline',
'Amount' => $Amount,
'PartyA' => $PhoneNumber,
'PartyB' => $BusinessShortCode,
'PhoneNumber' => $PhoneNumber,
'CallBackURL' => 'http://www.must.ac.ke',
'AccountReference' => 'ndndmjsds',
'TransactionDesc' => 'snncndndnddndndn'
);
$data_string = json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_HEADER, false);
$curl_response=curl_exec($curl);
return $curl_response;


?>
