<?php

function processData($data) {
    // Validate data
    if (empty($data['name']) || empty($data['email'])) {
        return 'Invalid data';
    }

    // Save data
    $conn = new mysqli('localhost', 'user', 'password', 'database');
    if ($conn->connect_error) {
        return 'Connection failed: ' . $conn->connect_error;
    }
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $data['name'], $data['email']);
    $stmt->execute();

    // Send confirmation email
    mail($data['email'], 'Welcome!', 'Thanks for signing up!');

    return 'Success';
}

$response = processData(['name' => 'John', 'email' => 'john@example.com']);
echo $response;