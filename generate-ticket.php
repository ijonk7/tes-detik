<?php
require 'helpers/input_sanitize.php';
require 'helpers/getcode.php';
require 'validation/generate-code.php';
require 'config/database.php';

$event_id = (int) input_sanitize($argv[1]);
$sql = "";

for ($i=0; $i < $argv[2]; $i++) { 
    $sql .= "INSERT INTO tickets (event_id, ticket_code, status, created_at, updated_at) 
             VALUES (" . $event_id . ",'DTK" .  getCode() . "', 'available', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());";
}

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>