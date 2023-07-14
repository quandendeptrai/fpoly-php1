<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'] ?? ''; // Check tồn tại

    $errorName = $errorEmail = $errorWebsite = $errorGener = null;

    if (empty($name) || ctype_alpha(str_replace(' ', '', $name)) === false) {
        $errorName = 'Required. + Must only contain letters and whitespace';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = 'Required. + Must contain a valid email address (with @ and .)';
    }

    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        $errorWebsite = 'It must contain a valid URL';
    }

    if (empty($gender)) {
        $errorGener = 'Required. Must select one';
    }
}