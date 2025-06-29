<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Basic security: strip tags and trim whitespace
$name = strip_tags(trim($name));
$email = strip_tags(trim($email));
$message = strip_tags(trim($message));

if ($name && $email && $message) {
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Local development: skip sending email
        // You can enable this section after hosting the site

        /*
        $to = "heermehtaa12@gmail.com";  // 🔄 Replace with your real email
        $subject = "📬 New Contact Message from $name";
        $body = "You've received a new message:\n\n" .
                "Name: $name\n" .
                "Email: $email\n\n" .
                "Message:\n$message";
        $headers = "From: noreply@yourdomain.com\r\n" .
                   "Reply-To: $email\r\n";

        if (!mail($to, $subject, $body, $headers)) {
            echo "mail_error";
            exit;
        }
        */

        echo "success";
    } else {
        echo "error";
    }

    $stmt->close();
} else {
    echo "missing";
}

$conn->close();
?>
