<?php
    require 'conection.php';

    $description = filter_input(INPUT_POST, 'd', FILTER_SANITIZE_STRING);
    $idTicket = filter_input(INPUT_POST, 'i', FILTER_SANITIZE_STRING);

    try {
        $statement = $conn->prepare("INSERT INTO descriptions (`description`) 
            VALUES ('$description')");
        $statement->execute();
        $last_id = $conn->lastInsertId();

        $statement = $conn->prepare("INSERT INTO `tickets_has_descriptions` (`id_ticket`, `id_description`) 
            VALUES ('$idTicket', '$last_id')");
        $statement->execute();

        echo $idTicket;
    } catch(PDOException $e){
        echo "error";
    }
    $conn = null;
?>