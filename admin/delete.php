<?php
    include("common/database.php");
    
    $query = "DELETE FROM {$_REQUEST['table']} WHERE id={$_REQUEST['id']}";
    $statement = $db->prepare($query);
    $statement->execute();
    header('location:all_users.php');
?>