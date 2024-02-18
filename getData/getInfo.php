<?php
    include_once './conect.php';

    $sgl = "SELECT * FROM People";
    
    $conn -> query($sgl);

    // Perform query
    if ($result = $conn -> query($sgl)) {
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
?>