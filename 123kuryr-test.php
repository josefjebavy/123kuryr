<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;


require "config.php";



$client = new Client();
		$url = 'https://www.123kuryr.cz/atol-api/order/statushistory';
		$request = $client->post(
			$url,
			[
				'content-type' => 'application/json',
                'auth' => [
                    $username,
                    $password
                ],
                //'data'=>$data
                'json'=> ['orderNumbers'=>[$order1,$order2]]
			]
		);
var_dump($request);
/*
$response = $request->send();
var_dump($response);
*/
$body=$request->getBody();
echo"------------\n";
var_dump($body."");

echo"------------\n";

var_dump(json_decode($body));
echo"#############";

var_dump(json_decode($body)->$order2->history[0]->id);