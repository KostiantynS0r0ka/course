<?php

// if elseif else

$isAdmin = '3'; // 'user' - 1; admin - 2; moderator -3

if ($isAdmin === 1) {
    echo "Hi user!" . PHP_EOL;
} elseif ($isAdmin === 2) {
    echo "Hi Admin!" . PHP_EOL;
} elseif ($isAdmin == 3) {
    echo "Hi moderator!" . PHP_EOL;
} else {
    //
}

// switch case

$countryCode = 'en';


/*if ($countryCode === 'ua') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'en') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'es') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'it') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'tr') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'hu') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'pl') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'ro') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'bg') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'se') {
    echo '' . PHP_EOL;
} elseif ($countryCode === 'is') {
    echo '' . PHP_EOL;
}*/


switch ($countryCode) {
    case 'ua':
        echo 'Привіт користувач' . PHP_EOL;
        break;
    case 'en':
        echo 'Good afternoon' . PHP_EOL;

        break;
    case 'de':
        echo 'Gutten tag' . PHP_EOL;
        break;
    case 'bg':
        echo 'Здравей' . PHP_EOL;
        break;
    case 'ro':
        echo '...' . PHP_EOL;
        break;
    default:
        echo '...' . PHP_EOL;
}

// match

$countryCode = 'ua';

$string = match ($countryCode) {
    'de' => 'Gutten tag',
    'bg' => 'Здравей',
    'en' => 'Good afternoon',
    'ua' => 'Привіт користувач',
};

//echo $string . PHP_EOL;

// do... while... / while..do...

$counter = 1;


do {
//    echo 'This is number ' . $counter . PHP_EOL;
//    $counter++;
} while ($counter <= 0);

//while ($counter <= 0) {
//    echo 'This is number ' . $counter . PHP_EOL;
//    $counter++;
//}


// інкремент

$counter = 6;

//echo 'This is number ' . $counter++ . PHP_EOL;
//
//echo 'This is number ' . $counter . PHP_EOL;

// цикл for

for ($i = 0; $i >= 10; $i++) {
    echo 'This is number ' . $i . PHP_EOL;
}

// Для рооти з масивами
$array = [1, 2, 3];

foreach ($array as $item) {
    echo 'This is number ' . $item . PHP_EOL;
}
