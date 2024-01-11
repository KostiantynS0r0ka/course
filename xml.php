<?php

$xmlFileSource = file_get_contents("source.xml"); // String

$xmlObject = simplexml_load_string($xmlFileSource);

$toJson = json_encode($xmlObject); // json string
$toArray = json_decode($toJson, true);

foreach ($toArray['food'] as $element) {
    var_dump($element['price']);
}
