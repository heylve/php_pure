<?php 
$curl = curl_init();
 
$opts = [
    CURLOPT_URL => 'http://www.telepoche.fr/',
    CURLOPT_RETURNTRANSFER => true,
];
 
curl_setopt_array($curl, $opts);
 
$response = curl_exec($curl);
echo $response;
curl_close($curl)


?>