<?php
session_start();
include "conn.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $name_err = $email_err = $message_err = "";
    $errors = [];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    //Validation
    if(empty($name)){
        $name_err = "Please type in your name";
        array_push($errors, $name_err);
    }

    if(empty($email)){
        $email_err = "Please type in your email";
        array_push($errors, $email_err);
    }

    if(empty($message)){
        $message_err = "Please type in your message";
        array_push($errors, $message_err);
    }

    //Query the database to login
    if(empty($name_err) && empty($email_err) && empty($message_err)){
        $query = "insert into contact (name, email, message) values (:name, :email, :message)";
        if ($stmt = $pdo->prepare($query)) {
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message, PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "Thanks for contacting us, We'll get back to you soonest";
            } else {
                echo "Something went wrong";
            }
        }
    }

    //Output errors
    foreach ($errors as $error ) {
        echo $error."<br>";
    }
}