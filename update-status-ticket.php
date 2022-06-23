<?php
require 'helpers/input_sanitize.php';
require 'validation/update-status-ticket.php';
require 'config/database.php';
header('Content-Type: application/json; charset=utf-8');

$status = input_sanitize($_POST["status"]);
$event_id = input_sanitize($_POST["event_id"]);
$ticket_code = input_sanitize($_POST["ticket_code"]);

$sql = "UPDATE tickets SET status='" . $status . "',updated_at=CURRENT_TIMESTAMP() WHERE event_id=" . $event_id . " AND ticket_code='" . $ticket_code . "'";

if ($conn->query($sql) === TRUE) {
    $sql2 = "SELECT ticket_code, status, updated_at FROM tickets WHERE event_id=" . $event_id . " AND ticket_code='" . $ticket_code . "'";
    $result2 = $conn->query($sql2);    

    $response = array(
        'status' => true,
        'message' =>'Ticket update successful.',
        'data' => $result2->fetch_all(MYSQLI_ASSOC),
    );
    echo json_encode($response);
} else {
    $response = array(
        'status' => false,
        'message' => "Error updating record: " . $conn->error
    );
    http_response_code(400);
    echo json_encode($response);
}

$conn->close();
?>