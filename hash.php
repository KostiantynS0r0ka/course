<?php


$login    = 'username'; // $_POST['login']
$password = '12345qwerty';

$hashedPassword = password_hash($password, PASSWORD_ARGON2ID);

// Not work with password_hash()
// SELECT * FROM users WHERE login = $login AND password = $hashedPassword

echo password_hash($password, PASSWORD_ARGON2ID);
$pass1 = '$2y$10$zEXZabUmX9WlXdnwsEp4qO3GFtehWT5M8z4dXHl6aYuKhMDq0DrMm';
$pass2 = '$argon2id$v=19$m=65536,t=4,p=1$YWZVUlcvakh3S0tTRkZEcg$D4jD5e7nrCp02zHv3DZi+GbVYfvyR1lASaYuF8+8yFw';

echo PHP_EOL;
//var_dump(password_verify($password, $pass1));
//echo PHP_EOL;

