<?php

function track($resi, $courir) {
 $data = http_build_query(["kurir" => $courir, "resi" => $resi]);
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://pluginongkoskirim.com/cek-tarif-ongkir/front/resi-amp');
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 return json_decode(curl_exec($ch));
}

$data = track('030200010250720', 'jne');
var_dump($data);
