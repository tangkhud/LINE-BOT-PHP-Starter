<?php
$access_token = 'xr1zLNepesF/LTvtqIATxkIwbmO30J7tytcqyoetVeakpkGT8nP4dBMuQymU5UUx8fXMnhBUkd1QUh9wIsbNbFOyHm2/n9RLZAT9/fpG8wPHXK1BElEURd1b1xdOEIWeahSD3X086QAblJSB7mC4HwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;