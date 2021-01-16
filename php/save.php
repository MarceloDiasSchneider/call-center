<?php
    
    $date = filter_input(INPUT_POST, 'd', FILTER_SANITIZE_STRING);
    $responsible = filter_input(INPUT_POST, 'r', FILTER_SANITIZE_STRING);
    $order = filter_input(INPUT_POST, 'o', FILTER_SANITIZE_STRING);
    
    echo '<p>'.$date.'<p>';
    echo '<p>'.$responsible.'<p>';
    echo '<p>'.$order.'<p>';

?>