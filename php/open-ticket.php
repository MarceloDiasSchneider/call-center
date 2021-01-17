<?php
    require 'conection.php';
    
    $date = filter_input(INPUT_POST, 'd', FILTER_SANITIZE_STRING);
    $responsible = filter_input(INPUT_POST, 'r', FILTER_SANITIZE_STRING);
    $order = filter_input(INPUT_POST, 'o', FILTER_SANITIZE_STRING);
    
    try {
        $statement = $conn->prepare("INSERT INTO tickets (`creation_date`, `id_responsible`,`id_order`) 
            VALUES ('$date', '$responsible', '$order')");
        $statement->execute();
        $last_id = $conn->lastInsertId();
        echo $last_id;
    } catch(PDOException $e){
        echo "error";
    }
    $conn = null;

?>