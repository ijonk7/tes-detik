<?php
if (empty($_POST["event_id"])) {    
    $response = array(
        'status' => false,
        'message' =>'Event ID cannot empty.'
    );
    http_response_code(400);
    echo json_encode($response);
    exit();
}

if (empty($_POST["ticket_code"])) {    
    $response = array(
        'status' => false,
        'message' =>'Ticket code cannot empty.'
    );
    http_response_code(400);
    echo json_encode($response);
    exit();
}

if (empty($_POST["status"])) {    
    $response = array(
        'status' => false,
        'message' =>'Status cannot empty.'
    );
    http_response_code(400);
    echo json_encode($response);
    exit();
}
?>