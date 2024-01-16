<?php

$data = file_get_contents(__DIR__ . '/data.json');
$data_db = json_decode($data, true);
