<?php

// Retrieve the webhook payload
$jsonPayload = file_get_contents('php://input');
$payload = json_decode($jsonPayload, true);

// Process the webhook payload and store the data in your database
// Example: Assuming you have a MySQL database set up

// Connect to the database
$host = 'your_database_host';
$dbName = 'your_database_name';
$user = 'your_database_user';
$password = 'your_database_password';

$pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

// Extract the necessary data from the payload
$action = $payload['result']['action'];
$parameters = $payload['result']['parameters'];

// Store the data in the database
$stmt = $pdo->prepare("INSERT INTO your_table (action, parameters) VALUES (:action, :parameters)");
$stmt->execute(['action' => $action, 'parameters' => json_encode($parameters)]);

// Send a response back to the webhook provider (optional)
$response = [
    'status' => 'success',
    'message' => 'Webhook received and processed successfully',
];
echo json_encode($response);
