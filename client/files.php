<?php

header("Content-Type: application/json");

$files_raw = `find slides -name '*jpg' | sort `;
$files = explode("\n", $files_raw);
array_pop($files);



echo json_encode($files);


?>
