<?php

    include './db.connexion.php';
    include './db.create.php';

?>


<!DOCTYPE html>
<html>

<head>

    <title>Todo List</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <h1><center>Todo List</center></h1>
    
    <!-- Formulaire d'ajout de tâche -->
    <form action="./data.php" method="get"><h2>Nouvelle Tâche :</h2> 
        <input type="text" id="tododata" name="tododata"/>
        <input type="hidden" name="action" value="add"/><br><br>
    </form>

    <!-- Affichage, suppression et modification de tâche -->
    
    <div>
        <h3><center>Cliquez sur une tâche pour la supprimer :</center></h3>
    <?php

        $query = mysqli_query($mysqli,'SELECT * from todolist ORDER BY id;');

        echo '<table>';
        while($row = mysqli_fetch_object($query)){

            // Lien hypertexte permettant l'affichage et la suppression d'une tâche
            echo    '<tr>
                        <td><a class="tache" href="http://localhost/todo/data.php ?action=delete&id='.$row->id.'">'.$row->todo.'</a></td>';
            // Bouton agissant comme un lien hypertexte permettant la modification d'une tâche
                        echo '<td><a class="edit" href="edit.php?id='.$row->id.'"><button>Edit</button></a></td>
                    </tr>';
            
        }
        echo '</table>';
        
    ?>
    </div>
</body>

</html>

