<?php

if ($_POST) {
    $name = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $from = "$email";
        $to = "email@email.com";
        $subject = 'someone just filled your form';
        $author = $name;

        // mail($to, $subject,$message, $from,  $author);
        echo '<div style="background: green; color: white; font-size: 30px"> Success <div>';
        include('db.php');
    };
};
