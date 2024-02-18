<?php
    include_once './conect.php';
        
    $page = $_GET['page'];

    $limit = 4; 
    $offset = ($page - 1) * $limit;

    $sql = "SELECT * FROM Wiadomosci LIMIT $limit OFFSET $offset";

    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($data);

?>
