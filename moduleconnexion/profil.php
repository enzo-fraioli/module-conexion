<?php

session_start();
$id = $_SESSION["id"];
$bdd = mysqli_connect("localhost","root","","moduleconnexion"); 

$req= mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE id = $id");

$res= mysqli_fetch_all($req,MYSQLI_ASSOC);
$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password']; 

if (isset($_POST['env']))
{
    $nom1 = $_POST['nom'];
    $prenom1 = $_POST['prenom'];
    $password1 = $_POST['password'];
    $login1 = $_POST['login'];
    $req2= mysqli_query($bdd,"UPDATE utilisateurs SET login='$login1', prenom='$prenom1', nom='$nom1', password='$password1' WHERE  id = $id ");
    header("Location: profil.php");
} 


?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="profilstyle.css">
</head>
<body>
</header> 
<div class="forum">
<h1>Modifier le profil :</h1>
    <form name="formu" action="" method="post">
        <label for ="login">Changer de log</label>
        <br>
        <input id="login" name="login" value="<?php echo $login?>" type="text" placeholder="username"/>
        <br><br>
        <label for ="prenom">Changer votre prénom</label>
        <br>
        <input name="prenom" value="<?php echo $prenom?>" type="text" placeholder="prenom" />
        <br><br>
        <label for ="nom">Changer votre nom</label>
        <br>
        <input name="nom" value="<?php echo $nom?>" type="text" placeholder="nom" />
        <br><br>
        <label for ="password">Changer de mot de passe</label>
        <br>
        <input name="password" value="<?php echo $password?>" type="password" placeholder="Ton mdp"/>
        <br><br>
        <input name="env" type="submit" placeholder="clic ici">
    </form>
    <br>
    <a href='index.php'>Accueil</a>
    <a href='deco.php'>Déconnexion</a>
    <a href='https://github.com/enzo-fraioli/module-conexion.git'>Lien github</a>
    <br>
</div>
</body>
</html>