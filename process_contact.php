<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelease";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact_messages (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Thank you for your message! We will get back to you soon.');
            window.location.href = 'contact.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: Message could not be sent. Please try again.');
            window.location.href = 'contact.php';
        </script>";
    }
}

$conn->close();
?>
