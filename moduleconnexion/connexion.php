<?php
$connect= mysqli_connect("localhost","root","","moduleconnexion");

if(isset($_POST['login']) && isset($_POST['password'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $sql=mysqli_query ($connect,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
    $res= mysqli_fetch_all($sql); 
}
    if (empty($res)) {
    }
     else {
         if($res[0][4] == $password){
            session_start();
            if ( $password == 'admin' && $login == 'admin'){
                echo 'Connecté en tant que ADMIN';
                header ("refresh:4;url=admin.php");
    
            }else {
                echo $res[0][2] .' est connecté, en attente de redirection...';
                $_SESSION["id"] = $res[0][0];
                header ("refresh:4;url=profil.php");

            }
            }
             else {
             echo "pas bon";
         }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexionstyle.css">
    <title>connexion</title>
</head>
<body>

<div class="forum">
    <h1>Connexion</h1>
<form method="post" action="">
    <br>
    <input name="login" type="text" placeholder="login"required />
    <br>
    <br>
    <input name="password" type="password" placeholder="mdp" requried />
    <br>
    <br>
    <input type=submit value="Envoyer" name="env">
    <p class="message"> Pas de compte ? par ici !<a href="inscription.php">Inscription</a></p>
    <p class="message"> Ici un lien vers l'<a href="index.php">accueil</a></p>

</div>
</form>
</body>
</html>