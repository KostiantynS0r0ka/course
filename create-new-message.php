<?php

require_once('db.php');

$pdo = getPDO();

// Add new
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    addNewMessage($pdo, htmlspecialchars($_POST['name']), htmlspecialchars($_POST['message']));
}

$pdo = null;