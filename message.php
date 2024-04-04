<?php
include_once 'config.inc.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject'])&& 
isset($_POST['message'])) {

    $name = $_POST["name"];

    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


        $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === true) {
            header("Location:index.php");
        exit(); 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
else{
    echo "Error: Please fill in all the fields";
}
?>
