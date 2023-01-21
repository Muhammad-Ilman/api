<?php

$data = file_get_contents('test.json');

$anggota =  json_decode($data, true);

var_dump($anggota);
echo $anggota[0]['guru']['art'];