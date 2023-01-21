<?php

// $anggota = [
//   [
//     "nama" => "Risa",
//     "nik" => 20202022,
//     "email" => "risautsukushi@gmail.com"
//   ],
//   [
//     "nama" => "Ilman",
//     "nik" => 20202023,
//     "email" => "ilmanhansamu@gmail.com"
//   ]
// ];

$dbauth = new PDO('mysql:host=localhost;dbname=spdrm', 'root', '');
$db = $dbauth->prepare('SELECT * FROM data_anggota');
$db->execute();

$anggota = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($anggota);
echo $data;
