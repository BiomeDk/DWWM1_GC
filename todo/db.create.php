<?php

include './db.connexion.php';


mysqli_query($mysqli, "CREATE IF NOT EXISTS TABLE todolist(id int primary key not null auto_increment,todo varchar(191))");

  


?>