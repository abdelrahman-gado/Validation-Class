<?php

require_once "user_validator.php";

if (isset($_POST['submit'])) {

    $userValidator = new UserValidator($_POST);
    $errors = $userValidator->validateForm();

    // save data to db
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>PHP OOP Tutorial</title>
</head>

<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="<?= htmlspecialchars($_POST['username']) ?? '' ?>">
            <div class="error"><?= htmlspecialchars($errors['username']) ?? '' ?></div>

            <label>Email</label>
            <input type="text" name="email" value="<?= htmlspecialchars($_POST['email']) ?? '' ?>">
            <div class="error"><?= htmlspecialchars($errors['email']) ?? '' ?></div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>