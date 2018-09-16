<?php
$access_token = 'SAciHhcAG3OKDLgkFKo/eJXRQs3Q+lpMbZ9r+0IEfoB4CysaYl8Grx0IV19oXZ7edB7ODDG2zoX/zRHiUcb5MQX/7mwIjS8vhDbs02KIYH1LLpTs5DEjHSQV+E7pQ1uu6R/dZaVDZA0z3fp39ZmHxwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
