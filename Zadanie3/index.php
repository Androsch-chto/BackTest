<?php
$hip = $_POST['hip'];
$smu = $_POST['smu'];

header('Content-Type: text/json; charset=utf-8');

echo json_encode(intdiv($smu, $hip));


