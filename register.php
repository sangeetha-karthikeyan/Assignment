<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event_name'];

$sql = "INSERT INTO registrations (name, email, event_name)
        VALUES ('$name', '$email', '$event')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Registered Successfully";
} else {
    echo "❌ Error occurred";
}

mysqli_close($conn);
?>