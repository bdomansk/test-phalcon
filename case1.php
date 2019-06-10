<?php
$urlList = ["https://midexpress.com.ua/smartfony-i-telefony.html",
"https://midexpress.com.ua/smartfony-i-telefony.html?start=12"];
$names = [];
foreach ($urlList as $url) {
	$ch = curl_init($url);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 	$data = curl_exec($ch);
 	if (preg_match_all('/class="prodtitle">.+">/', $data, $matches)){
 		foreach ($matches[0] as $match) {
 			$match = preg_split('/^.+title="/', $match);
 			$match[1] = substr($match[1], 0, strlen($match[1]) - 2);
 			$names[] = $match[1];
 		}
 	}
	curl_close($ch);
}

foreach ($names as $name) {
	echo "$name\n";
}
?>
