<?php
    require '../../../db-conection/call-center-conection.php';

    $idTicket = filter_input(INPUT_POST, 'i', FILTER_SANITIZE_STRING);
    
    try {
        $statement = $conn->prepare("SELECT descriptions.description FROM tickets_has_descriptions 
            LEFT JOIN descriptions
            ON tickets_has_descriptions.id_description = descriptions.id
            WHERE tickets_has_descriptions.id_ticket = $idTicket" );
        $statement->execute();
        
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($statement->fetchAll() as $key => $value) {
            echo "<p class='other-description'>".$value['description']."</p>";
        }
    } catch(PDOException $e){
        echo "error".$e->getMessage();
    }
    $conn = null;
?>