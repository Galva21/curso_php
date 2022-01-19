<?php 

/**
we consume API REST from php with DailyMotion

The API have restriction HTTPS, so we have to have options 
to consume this service.
*/

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$options= array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

/**
With this function we disable the restriction HTTPS for read the data
*/
$response = file_get_contents($url, false, stream_context_create($options));

$obj = json_decode($response);

//print_r($obj);

foreach ($obj -> list as $value) {
    print_r($value->title . "<br/>");
}

?>