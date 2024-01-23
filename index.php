<!DOCTYPE html>
<?php
require_once('db.php');

$pdo = getPDO();

// Add new
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    addNewMessage($pdo, htmlspecialchars($_POST['name']), htmlspecialchars($_POST['message']));
}

// Delete
if (!empty($_GET['delete_message'])) {
    deleteMessage($pdo, $_GET['delete_message']);
}

// Get actual list of messages
$messages = getAllMessages($pdo);

$pdo = null;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <div class="card">
        <div class="card-header">
            Chat
        </div>
        <ul class="list-group list-group-flush">
            <?php foreach ($messages as $message) : ?>
                <li class="list-group-item">
                    <strong><?= $message['name'] ?></strong> at
                    <?= $message['date'] ?> :
                    <i><?= $message['message'] ?></i>
                    <a href="?delete_message=<?= $message['id'] ?>">X</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <br><br><br>
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input
                    type="text"
                    class="form-control"
                    name="name"
            >
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleInputMessage" class="form-label">Message</label>
            <input
                    type="text"
                    class="form-control"
                    name="message"
            >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>