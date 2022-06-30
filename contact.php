<?php

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME =  "contactdb"; //"cobwebd1_ContactDB";

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (isset($_POST['submit'])) {

    if (!empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['message'])) {
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];

        $query = "insert into clients(email, contact, message) values('$email', '$contact', '$message')";

        $run = mysqli_query($conn, $query) or die(mysqli_connect_error());

        if ($run) {

            // echo  "Form submitted successfully";
            session_start();
            $_SESSION['success_message'] = "Contact form saved successfully.";
           header("Location: index.php#contact_us");
            exit();
        } else {
            //echo "form not submited";
            session_start();
            $_SESSION['error_message'] = "Contact form not submitted.";
             header("Location: index.php#contact_us");
            exit();
        }
    } else {
        echo "all fields required";
    }
}
