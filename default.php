<?php 

$curl = curl_init('https://swapi.dev/api/planets/');

if (!$curl) {

  die("cURL handle unsuccessful");

}

$result = curl_exec($curl);

if (curl_errno($curl)) {

   echo(curl_error($curl));
   die();

}

curl_close($curl);


echo ($result);


?>