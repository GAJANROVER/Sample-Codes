<?php

$url = "https://bulksms.hutch.lk/sendsmsmultimask2.php?USER=CDBHRAPP&PWD=qi!$58CL&MASK=CDB%20MINT%20HR&NUM=0776274339&MSG=rovergajan";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>