<?php
$superSecretKey = openssl_random_pseudo_bytes(32);
echo $superSecretKey . PHP_EOL;
// OpenSSL


$cardNumber = '5678 8989 0909 1234'; // what we want to make as hash

$encryptedData = openssl_encrypt($cardNumber, 'aes-256-cbc', $superSecretKey);

echo $encryptedData . PHP_EOL;

$decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $superSecretKey);

echo $decryptedData . PHP_EOL;


//3��7��r�*�lx����        N;]�*���EiM��
//
//LUdlkKpXlW4YaByZ80M2Db+8ODsHRc4PsLIcwRGqzP4=
//5678 8989 0909 1234

//�~�o���빋��d�ٽ����}ۋ�ن
//
//e7MEdI4twArFBmx9oIf9c7zsbDbDQbswvlq4FYzoprI=
//5678 8989 0909 1234