<?php 
// if(!isset($_SESSION['admin']) and empty($_SESSION['admin']))
// {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJC</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>

<form action="../php_log_admin/login_admin.php" method="post">
    <label for="identifiant">Identifiant: </label>
    <input type="text" name="identifiant" placeholder="Votre Identifiant ou votre email">
    <label for="password">Mot de passe: </label>
    <input type="password" name="password" id="" placeholder= "Votre mot de passe">
    <button type="submit" name="submit">Se connecter</button>
    <?php 
    require "../php_log_admin/login_admin.php";
    if(isset($erreur_login)){
        echo $erreur_login; 
    }
    ?> 
    
</form>

</body>
</html>


<?php 
// }else{
//     header("Location: ../../index.php");
//     exit();
// }
?>