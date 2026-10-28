<?php
include "db.php";

// Check karein ke form POST method ke zariye submit hua hai ya nahi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Data get karein with null coalescing operator taake warnings na aayein
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_numbar = $_POST['phone_numbar'] ?? '';
    $message = $_POST['message'] ?? '';

    // SQL query mein variables theek tarah se pass karein
    $sql = "INSERT INTO contacts (name, email, phone_numbar, message) 
            VALUES ('$name', '$email', '$phone_numbar', '$message')";

    if (mysqli_query($connt, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($connt);
    }
} else {
    echo "Invalid Request!";
}
?>