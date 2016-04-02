<?php

$aContext = array(
    'http' => array(
        'proxy' => 'tcp://172.31.1.4:8080',
        'request_fulluri' => true,
    ),
);

$cxContext = stream_context_create($aContext);

$numb = $_GET['numb'];
// echo $numb;
// $url = "http://trace.bharatiyamobile.com/?numb=$numb";
// echo $url;

// $sFile = file_get_contents($url, False, $cxContext);
// echo $sFile;

$url = "http://bmobile.in/".$numb;

$page = file_get_contents($url, False, $cxContext);
$pos = strpos($page, "Operator:");

$pos += 55;
$pos1 = $pos;

while ($page[$pos] != '<') {
	$pos++;
}

$operator = substr($page, $pos1, $pos - $pos1);
echo $operator;

?>