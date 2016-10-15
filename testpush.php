<?php


$access_token = 'xr1zLNepesF/LTvtqIATxkIwbmO30J7tytcqyoetVeakpkGT8nP4dBMuQymU5UUx8fXMnhBUkd1QUh9wIsbNbFOyHm2/n9RLZAT9/fpG8wPHXK1BElEURd1b1xdOEIWeahSD3X086QAblJSB7mC4HwdB04t89/1O/w1cDnyilFU=';


		$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '33c0afd254f1b61fc3f09db38d4aafde']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello888888888888888');
$response = $bot->replyMessage('บadfb6cb1eac642dc8ec56791357c1c04', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getBody();