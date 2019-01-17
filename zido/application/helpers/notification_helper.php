<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	function send_notification_android($registration_ids, $data){
		
		$url = 'https://fcm.googleapis.com/fcm/send';
		/*$fields = array (
		        'to' => $registration_ids,
		        'notification' => array (
		         "body" => $data,
		          "title" => $data
		        )
		);*/

		$fields = array(
			'to'  => $registration_ids,
			//'notification' => $data,
			'data' => $data
    	);
		$fields = json_encode ($fields);
		$headers = array (
		        'Authorization: key=' . "AIzaSyDQiaTDVsliOHl7hIqag6k3aoe9s2ZTXcE",
		        'Content-Type: application/json'
		);
		
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POST, true );
		curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
		$result = curl_exec ($ch);
		curl_close ( $ch );
		return $result;
	}
	

	function send_notification_ios($device_token, $data)
	{ 
	    
		$deviceToken = $device_token; 

	
		$passphrase = 'volive@hyd';  // development;
		$ctx = stream_context_create();
		//stream_context_set_option($ctx, 'ssl', 'local_cert',"DistributionDec26Zido.pem");
		stream_context_set_option($ctx, 'ssl', 'local_cert',"DevelopemTZidoDec26.pem");
		stream_context_set_option($ctx, 'ssl', 'passphrase',$passphrase);
	
		$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err,$errstr, 60,	 STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
		
		//production
		//$fp = stream_socket_client('ssl://gateway.push.apple.com:2195', $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
		if (empty($fp))
			exit("Failed to connect: $err $errstr" . PHP_EOL);
		// Create the payload body
		/*$body['aps'] = array(
			'alert' => array(
			        'title' => 'New message ',
             		 'body' => $data		   	 
			 ),
			'sound' => 'default'
		);*/
		$body['aps'] = array(
					    		'badge'    => +1,
					    		"category" => "INVITATION",
					    		"type1"    => 1,
					    		'alert'    => @$data['body'],
					    		'info'     => $data,
					    		'sound'    => 'default'
					    	);
    	//print_r($body);exit;
		// Encode the payload as JSON
		$payload = json_encode($body);
		// Build the binary notification
		$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
		// Send it to the server
		$result = fwrite($fp, $msg, strlen($msg));
		// Close the connection to the server
		fclose($fp);
		if (!$result)
			return 'Message not delivered';
		else
			return 'Message Successfully delivered';
	}














	function user_send_notification_android($registration_ids, $data){
		
		$url = 'https://fcm.googleapis.com/fcm/send';
		/*$fields = array (
		        'to' => $registration_ids,
		        'notification' => array (
		         "body" => $data,
		          "title" => $data
		        )
		);*/
	
		
		$fields = array(
			'to'  => $registration_ids,
			'notification' => $data,
			'data' => $data
    	);
		$fields = json_encode ($fields);
		
		$headers = array (
		        			'Authorization: key=' . "AIzaSyCARbgABHtlTbKExh_iSG7NbqjQAqVNJO8",
		        			'Content-Type: application/json'
						  );
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POST, true );
		curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
		$result = curl_exec ($ch);
		curl_close ( $ch );
		return $result;
	}
	

	function user_send_notification_ios($device_token, $data)
	{ 
	    
		$deviceToken = $device_token; 

	
		$passphrase = 'volive@hyd';  // development;
		$ctx = stream_context_create();
		//stream_context_set_option($ctx, 'ssl', 'local_cert',"UserDev.pem");
		stream_context_set_option($ctx, 'ssl', 'local_cert',"TechniqueUserProd.pem");
		stream_context_set_option($ctx, 'ssl', 'passphrase',$passphrase);
	
		//$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
		
		//production
		$fp = stream_socket_client('ssl://gateway.push.apple.com:2195', $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
		if (empty($fp))
			exit("Failed to connect: $err $errstr" . PHP_EOL);
		// Create the payload body
		/*$body['aps'] = array(
			'alert' => array(
			        'title' => 'New message ',
             		 'body' => $data		   	 
			 ),
			'sound' => 'default'
		);*/
		$body['aps'] = array(
    		'badge' => +1,
    		'alert' => $data['body'],
    		'info' => $data,
    		'sound' => 'default'
    	);
		// Encode the payload as JSON
		$payload = json_encode($body);
		// Build the binary notification
		$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
		// Send it to the server
		$result = fwrite($fp, $msg, strlen($msg));
		// Close the connection to the server
		fclose($fp);
		if (!$result)
			return 'Message not delivered';
		else
			return 'Message Successfully delivered';
	}


