<?php
    require 'conection.php';

    try {
        $statement = $conn->prepare("SELECT * FROM responsibles");
        $statement->execute();
        
        /* Não entendo mas funciona */
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($statement->fetchAll() as $key => $value) {
            echo "<option value=".$value['id'].">".$value['name']."</option>";
        }
    } catch(PDOException $e){
        echo "Error: ". $e->getMenssage();
    }
    $conn = null;
?>