<?php
header('Content-type: text/event-stream');
header('Cache-control: no-cache');

$time = date('r');
echo "data: The server time is {$time}\n\n";
flush();