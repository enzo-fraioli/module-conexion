<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="adminstyle.css">

    </head>
    <header> 
    </header>
    <body>
        <?php
        $bdd = mysqli_connect("localhost","root","","moduleconnexion"); 

        $req= mysqli_query($bdd,"SELECT * FROM utilisateurs");  

        $res= mysqli_fetch_all($req, MYSQLI_ASSOC);  

?>
        <div class="liste">
        <h1>Liste des comptes</h1>
        <a href="index.php">Accueil</a>
        <a href="deco.php">Déconnexion</a>
        <br><br>
    </li>
        <table>
            <thead>

                    <?php
                    echo '<tr>';                        
                    foreach($res[0] as $key => $value){        

                            echo "<th>$key</th>";          

                    }
                    echo '</tr>';
                    ?>
            </thead>
<?php
                foreach($res as $key => $value){ 

                    echo '<tr>';

                    foreach ($value as $key1 => $value1) 
                    {
                        echo "<td>$value1</td>";  
                    }

                        echo '</tr>'; 
                }
?>
        </table>
        <br>
            </div>
    </body>
</html>