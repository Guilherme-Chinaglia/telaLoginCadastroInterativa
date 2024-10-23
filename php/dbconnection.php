<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'login';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        http_response_code(500);
        die("Falha ao conecta com banco de dados " . $conn->error);
    }




?>