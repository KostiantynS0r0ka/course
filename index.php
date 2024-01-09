<!DOCTYPE html>
<?php
session_start();
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

    <br><br><br>
    <?php
    if (!isset($_COOKIE['counter'])) {
        $counter = 0;
    } else {
        $counter = $_COOKIE['counter'];
    }

    $counter++;

    setcookie('counter', $counter);


    if (!empty($_POST['email'])) {
        if (empty($_SESSION['user'])) {
            $_SESSION['user'] = [];
        }
        $_SESSION['is_registered'] = true;

        $id = count($_SESSION['user']);
        $_SESSION['last_id'] = $id;

        $_SESSION['user'][$id] = [
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
        ];
        ?>
        <div class="alert alert-success" role="alert">
            Ви вказали імейл <?= $_POST['email']; ?>
        </div>
        <?php
    }
    ?>
    <br><br><br>
    <?php
    var_dump($_COOKIE);
    ?>
    <br><br><br>

    <?php
    if (empty($_SESSION['is_registered']) || !$_SESSION['is_registered']) :
        ?>

        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input
                        type="text"
                        class="form-control"
                        name="name"
                >
            </div>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address 1</label>
                <input
                        type="text"
                        class="form-control"
                        name="address[]"
                >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address 2</label>
                <input
                        type="text"
                        class="form-control"
                        name="address[]"
                >
            </div>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input
                        type="email"
                        class="form-control"
                        name="email"
                >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php
    else :
        ?>
        <h1>You've already registered with E-mail
            <span class="badge bg-secondary">
                        <?= $_SESSION['user'][$_SESSION['last_id']]['email'] ?>
                    </span>
        </h1>
    <?php
    endif;
    ?>
</div>
</body>
</html>