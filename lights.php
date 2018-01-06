<?php

include("config/config.php");

$link = url;
$authToken = authToken;

$headers = array('Authorization: Bearer ' . $authToken);

$data = 'power=off';

$ch = curl_init($link);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
$response = curl_exec($ch);

?>