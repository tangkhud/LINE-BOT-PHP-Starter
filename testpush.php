<?php
$access_token = 'xr1zLNepesF/LTvtqIATxkIwbmO30J7tytcqyoetVeakpkGT8nP4dBMuQymU5UUx8fXMnhBUkd1QUh9wIsbNbFOyHm2/n9RLZAT9/fpG8wPHXK1BElEURd1b1xdOEIWeahSD3X086QAblJSB7mC4HwdB04t89/1O/w1cDnyilFU=';


				
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => " 555 ผลรับข้อความของคุณได้แล้วครับ"
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => '0970984403',
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		
echo "OK    ll";

