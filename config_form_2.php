<?php
//define variables and set to empty values

$title = $name = $email = $comment = '';
$name_Err = $email_Err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = '<h5>your comment is here</h5>';
    if (empty($_POST['name'])) {
        $name_Err = '* name is required *';
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $name_Err = 'only letters';
        }
    }

    if (empty($_POST['email'])) {
        $email_Err = '* email is required *';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_Err = 'invalid email';
        }
    }

    if (empty($_POST['comment'])) {
        $comment = '';
    } else {
        $comment = test_input($_POST['comment']);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>