<?php
if (empty($_GET["event_id"])) {    
    $response = array(
        'status' => false,
        'message' =>'Event ID cannot empty.'
    );
    http_response_code(400);
    echo json_encode($response);
    exit();
}

if (empty($_GET["ticket_code"])) {    
    $response = array(
        'status' => false,
        'message' =>'Ticket code cannot empty.'
    );
    http_response_code(400);
    echo json_encode($response);
    exit();
}
?>