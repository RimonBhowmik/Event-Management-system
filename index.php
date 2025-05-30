<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Example: Sending an email (you can replace this with your actual processing logic)
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Inquiry from Cokher Golpo Website';
    $email_body = "Name: $name\nEmail: $email\n\n$message";
    
    // Example: Send email using PHP's mail function
    mail($to, $subject, $email_body);

    // Respond to the user
    echo '<script>alert("Thank you for reaching out! We will get back to you shortly.");</script>';
}
?>
