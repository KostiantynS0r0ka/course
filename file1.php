<?php
$name = 'John 2'; //$_POST['name']
$age = 12;
$street = 'Main Avenue 20';

$delimeter = '|-|';
$stringWithData = $name . $delimeter . $age . $delimeter . $street;
//echo $stringWithData .PHP_EOL;
//'John|-|9|-|Main Avenue 21';
//$dataFromString = explode($delimeter, $stringWithData);
//var_dump($dataFromString);
//$test = implode(', ', $dataFromString);

//$fileToFill = fopen("data.txt", "a+") or die("Couldn't read the file");
//fwrite($fileToFill, $stringWithData . PHP_EOL);
//fclose($fileToFill);

$fileToRead = fopen("data.txt", "r") or die("Couldn't read the file");

while(!feof($fileToRead)) {
    $dataFromRow = fgets($fileToRead);
    $dataFromString = explode($delimeter, $dataFromRow);

    if (isset($dataFromString[1]) && $dataFromString[1] == 12) {
        echo "Hello Mr." . $dataFromString[0] . ' from ' . $dataFromString[2] . PHP_EOL;
    }
}

fclose($fileToRead);