<?php
require 'helpers/input_sanitize.php';
require 'validation/check-code-ticket.php';
require 'config/database.php';
header('Content-Type: application/json; charset=utf-8');

$event_id = input_sanitize($_GET["event_id"]);
$ticket_code = input_sanitize($_GET["ticket_code"]);

$sql = "SELECT ticket_code, status FROM tickets WHERE event_id=" . $event_id . " AND ticket_code='" . $ticket_code . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {    
    $response = array(
        'status' => true,
        'message' =>'Ticket found.',
        'data' => $result->fetch_all(MYSQLI_ASSOC)
    );
    echo json_encode($response);
} else {
    $response = array(
        'status' => false,
        'message' =>'Ticket not found.'
    );
    echo json_encode($response);
}

$conn->close();
?>