<?php

include 'conn.php';

if (isset($_POST['contact'])) {
    // Validate Name
    $errors = [];

    // Validate Name
    $name = clean_input($_POST["name"]);
    if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors[] = "Valid name is required.";
    }

    // Validate Email
    $email = clean_input($_POST["email"]);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }

    // Validate Subject
    $subject = clean_input($_POST["subject"]);
    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }

    // Validate Message
    $message = clean_input($_POST["message"]);
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        echo "Validation successful!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Subject: $subject<br>";
        echo "Message: $message<br>";
    } else {
        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }
}

// Sanitize input
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
echo 'working';
?>