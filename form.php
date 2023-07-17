<?php
require_once 'backend/handle-form.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>

    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

    Name: <input type="text" name="name" value="<?= $name ?? '' ?>">
    <span class="error"><?= $errorName ?? '' ?></span>
    <br><br>

    E-mail:
    <input type="text" name="email" value="<?= $email ?? '' ?>">
    <span class="error"><?= $errorEmail ?? '' ?></span>
    <br><br>

    Website:
    <input type="text" name="website" value="<?= $website ?? '' ?>">
    <span class="error"><?= $errorWebsite ?? '' ?></span>
    <br><br>

    Comment: <textarea name="comment" rows="5" cols="40"><?= $comment ?? '' ?></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" <?= isset($gender) && $gender == 'female' ? 'checked' : ''; ?> value="female">Female
    <input type="radio" name="gender" <?= isset($gender) && $gender == 'male' ? 'checked' : ''; ?> value="male">Male
    <input type="radio" name="gender" <?= isset($gender) && $gender == 'other' ? 'checked' : ''; ?> value="other">Other
    <span class="error"><?= $errorGener ?? '' ?></span>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<h1>Thông tin sau khi Validate thành công</h1>

<ul>
    <li>Name: <?= $name ?? '' ?></li>
    <li>E-mail: <?= $email ?? '' ?></li>
    <li>Website: <?= $website ?? '' ?></li>
    <li>Comment: <?= $comment ?? '' ?></li>
    <li>Gender: <?= $gender ?? '' ?></li>
</ul>

</body>
</html>