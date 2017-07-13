<?php
header("content-type:image/png;charset=utf-8");
$curl=curl_init();
curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_URL,"http://localhost/php/mvc/image.php");
curl_exec($curl);