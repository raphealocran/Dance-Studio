<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reference = $_POST['reference'];
    $questions = $_POST['questions'];

    // Email content
    $to = "ocranrapheal@gmail.com";
    $subject = "Customer Inquiry from " . $firstName . " " . $lastName;
    $message = "
        Customer Information:\n
        First Name: $firstName\n
        Last Name: $lastName\n
        Email: $email\n
        Phone: $phone\n
        Referral Source: $reference\n
        Questions: $questions
    ";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Sorry, there was an issue submitting your form. Please try again.";
    }
}
?>
