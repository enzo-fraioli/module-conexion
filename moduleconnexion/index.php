<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta chartset="utf-8">
        <title>aceuil</title>
        <link rel="stylesheet" a href="indexstyle.css">
    </head>
    <body>
        <header>
            <div class="forum">
            <h1>Accueil</h1> 
<?php
            session_start();
            if(isset($_SESSION["id"])){
                echo "<a href='profil.php'>profil</a>";
                echo "<a href='deco.php'>Déconnexion</a>";
                echo "<a href='https://github.com/enzo-fraioli/module-conexion.git'>Lien github</a>";
            }
            else{
                echo "<a href='connexion.php'>Connexion</a>";
                echo "<a href='inscription.php'>Inscription</a>";
                echo "<a href='https://github.com/enzo-fraioli/module-conexion.git'>Lien github</a>";
            }
?>
                <br>
                </div>
            </ul>
        </header>
    </body>
</html>

<style>
