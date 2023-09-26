<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,POST,OPTIONS");
header("Access-Control-Max-Age: 86400");

error_reporting(0);

function errorResponse($message, $code = 400) {
	switch($code) {
		case 400:
			header("HTTP/1.1 400 Bad Request");
			break;
		case 403: 
			header('HTTP/1.0 403 Forbidden');
			break;
	}
	echo json_encode(array('status' => 'error', 'message' => $message));
	die();
}

function sendResponse($data) {
	$response = array(
		'status' 	=> 'success',
		'data'		=> $data
	);
	header("HTTP/1.1 200 OK");
	echo json_encode($response);
	die();
}

function get_option_lang($option,$lang)
{

    if ($lang == 'ar') {
        $option .= '_ar';
    }
    return get_option($option);
}