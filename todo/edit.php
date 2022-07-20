<?php

include './db.connexion.php';

?>


<!DOCTYPE html>
<html>
    
    <head>

        <title>Todo Edit</title>

        <style>

            body{
                background: url("./media/bureau.jpg") no-repeat center center fixed;
                background-size: cover;
            }

        </style>

    </head>
    
    <body>

        <h1><center>Todo Edit</center></h1><br><br>

        <?php
        $id = $_GET['id'];
        $request = mysqli_query($mysqli, 'SELECT todo FROM todolist WHERE id = '.$id.';');
        $task = mysqli_fetch_object($request);
        
        echo '<br>Modifier la tâche "'.$task->todo.'" par :<br><br>';
        echo '<form action="./data.php" method="get">';
            echo '<input type="text" id="dataEdit" name="dataEdit" value='.$task->todo.'>';
            echo '<input type="hidden" name="action" value="edit">';
            echo '<input type="hidden" name="id" value="'.$id.'">';
        echo '</form>';
        ?>
    </body>

</html>
