<?php

include './db.connexion.php';

if($_GET['action'] == 'delete'){
    
    // Supprimer une tâche de la base de données
    $id = $_GET['id'];
    mysqli_query($mysqli, 'DELETE FROM todolist WHERE id = '.$id.';');

}else if($_GET['action'] == 'add'){

    // Insérer une tâche dans la base de données
    $val = $_GET['tododata'];
    mysqli_query($mysqli, 'INSERT INTO todolist (todo) VALUES ("'.$val.'");');

}else if($_GET['action'] == 'edit'){

    // Modifier une tâche dans la base de données
    $edit = $_GET['dataEdit'];
    $id = $_GET['id'];
    mysqli_query($mysqli, 'UPDATE todolist SET todo = "'.$edit.'" WHERE id = '.$id.';');

}

// Renvoi l'utilisateur sur la page index
header("Location:./index.php");

?>