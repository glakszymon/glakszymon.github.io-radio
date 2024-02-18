<?php
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');

    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        header('Access-Control-Max-Age: 86400');
        header('Content-Length: 0');
        
        http_response_code(200);
        exit;
    }

    //if this is not post method then exit
    if ($_SERVER['REQUEST_METHOD']!= 'POST') {
        
        http_response_code(200);
        exit;
    }

    $payloadText = file_get_contents('php://input');

    $payload = json_decode($payloadText);

    $week = $payload->week;

    include_once './conect.php';

    $query = "SELECT * FROM Ramowka WHERE weekDayNumber=$id";

    
    $conn -> query($query);
    
    if ($result = $conn -> query($query)) {
        // echo "Returned rows are: " . $result -> num_rows;
        header('Content-Type: application/json');
        // header('Content-Length: 1800');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($rows);
        // Free result set
        $result -> free_result();
    }
    
    $conn -> close();

    // http_response_code(200);

?>