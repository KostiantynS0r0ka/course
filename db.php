<?php

function getPDO(): PDO
{
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'myDB';

    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function showAndDie($somethin)
{
    echo '<pre>';
    var_dump($somethin);
    echo '</pre>';
    die();
}

function getAllMessages(PDO $pdo): array
{
    $data = [];
    $sql = "SELECT * FROM messages";
    $queryRunner = $pdo->query($sql);
    $queryRunner->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $queryRunner->fetch()) {
        $data[] = $row;
    }

    return $data;
}

function addNewMessage(PDO $pdo, string $name, string $message)
{
    $sql = "INSERT INTO messages (name, message) VALUES (:name, :message)";

    $queryRunner = $pdo->prepare($sql);

    $params = compact('name', 'message');

    if (!$queryRunner->execute($params)) {
        echo 'Something went wrong';
    }
}

function deleteMessage($pdo, $id)
{
    $id = 1234;//DELETE FROM messages WHERE id=1234
    $id = "''; TRUNCATE TABLE messages;"; // DELETE FROM messages WHERE id=''; TRUNCATE TABLE messages;
    $sqlBad = "DELETE FROM messages WHERE id=" . $id;

    $sql = "DELETE FROM messages WHERE id=:id";

    $queryRunner = $pdo->prepare($sql);
    $pdo->query($sqlBad);

    if (!$queryRunner->execute(['id' => $id])) {
        echo 'Something went wrong';
    }
}

function checkAuth(PDO $PDO, string $login, string $password)
{
    $sqlBad = "SELECT * FROM users WHERE login=$login AND password=$password";
    $login = 'admin'; $password = '123123123'; // SELECT * FROM users WHERE login='admin' AND password='123123123'
    $login = "'' OR '1'='1'"; $password = '123123123'; // SELECT * FROM users WHERE login='' OR '1'='1' AND password='123123123'


    $sql = "SELECT * FROM users WHERE login=:login AND password=:password";
    $queryRunner = $PDO->prepare($sql);
    $users = $queryRunner->execute(['login' => $login, 'password' => $password]);
    if ($users && $users[0]) {
        $_SESSION['is_auth'] = true;
        //... $users[0]
    }
    //execute

    //check user/data. if data exists === auth success

}