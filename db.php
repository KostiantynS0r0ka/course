<?php

function getConnection()
{
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'myDB';

    $con = mysqli_connect($host, $username, $password, $dbName);

    if ($con->connect_error) {
        die("Connection failed " . $con->connect_error);
    }

    return $con;
}

function showAndDie($somethin)
{
    echo '<pre>';
    var_dump($somethin);
    echo '</pre>';
    die();
}

function getAllMessages($con): array
{
    $data = [];
    $sql = "SELECT * FROM messages";
    $result = $con->query($sql);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
    }

    return $data;
}

function addNewMessage($con, $name, $message)
{
    $sql = "INSERT INTO messages (name, message) VALUES (\"$name\", \"$message\")";

    if (!mysqli_query($con, $sql)) {
        echo 'Something went wrong';
    }
}

function deleteMessage($con , $id)
{
    $sql = "DELETE FROM messages WHERE id=". $id;

    if (!mysqli_query($con, $sql)) {
        echo 'Something went wrong';
    }
}