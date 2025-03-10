<?php

$ch = curl_init();
$url = "https://reqres.in/api/users?page=2";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resp = curl_exec($ch);
if ($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp, true);
    echo '<pre>';
    print_r($decoded);
}
curl_close($ch);




function test(){
    $data = ['1' => 'gajna', '2' => 'software engineer', '3' => 'web developer'];
    foreach($data as $values){
        echo $values;
    }

}