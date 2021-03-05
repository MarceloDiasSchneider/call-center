<?php
    require '../../db-conection/call-center-conection.php';

    try {
        $statement = $conn->prepare("SELECT * FROM orders 
        WHERE `id` <> ALL (SELECT `id_order` FROM tickets)");
        $statement->execute();

        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($statement->fetchAll() as $key => $value) {
            echo "<option value=".$value['id'].">".$value['order_number']."</option>";
        }
    } catch(PDOException $e){
        echo "Error: ". $e->getMenssage();
    }
    $conn = null;
?>