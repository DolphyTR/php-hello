<?php

	$ch = curl_init('http://www.torrent-oyun.com/index.php?topic=405868.50');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7) AppleWebKit/534.48.3 (KHTML, like Gecko) Version/5.1 Safari/534.48.3');

	$content = curl_exec($ch);

	curl_close($ch);

	echo $content;
?>