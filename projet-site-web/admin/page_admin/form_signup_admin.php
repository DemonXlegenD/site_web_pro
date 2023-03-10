<?php 
if(!isset($_SESSION['admin']) and empty($_SESSION['admin']))
{
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


<?php 
    
    require "../php_log_admin/signup_admin.php";
    
    /* Générer un jeton CSRF*/
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
?>

<form class="flex-start" action="../php_log_admin/signup_admin.php" method="post">
    <label for="prenom">Prénom: </label>
    <input type="text" name="prenom" id="" placeholder="Votre prénom" require>
    <label for="nom">Nom: </label>
    <input type="text" name="nom" id="" placeholder="Votre nom" require>
    <label for="email">Email: </label>
    <input type="email" name="email" id="" placeholder="Votre email" require>
    <label for="password">Mot de passe: </label>
    <input type="password" name="password" id="" placeholder="Votre mot de passe" require>
    <label for="confirm_password">Confirmez le mot de passe: </label>
    <input type="password" name="confirm_password" id="" placeholder="Veuillez confirmer votre mot de passe" require>
    <label for="identifiant">Identifiant: </label>
    <input type="text" name="identifiant" id="" placeholder="Choisissez un identifiant" require>
    <label for="telephone">Téléphone: </label>
    <input type="tel" name="telephone" id="" placeholder="Votre numéro de téléphone" require>
    <label for="date_anniversaire">Date d'anniversaire: </label>
    <div>
        <label for="jour">Jour: </label>
        <select name="jour" id="">
            <option disabled selected value="0">Jour</option>
            <?php
                for ($i = 1; $i <= 31; $i++)
                {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                }
            ?>
        </select>

        <label for="mois">Mois: </label>
        <select name="mois" size="1">   
            <option disabled selected value="0">Mois</option><option value="1">Janvier</option><option value="2">Février</option><option value="3">Mars</option><option value="4">Avril</option><option value="5">Mai</option><option value="6">Juin</option><option value="7">Juillet</option><option value="8">Août</option><option value="9">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">Décembre</option>
        </select>
        <label for="annee">Année: </label>
        <select name="annee">
            <option disabled selected value="0">Année</option>
            <?php
                for ($i = 2014; $i >= 1930; $i--)
                {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                }
            ?>
        </select>

    </div>
    
    <?php 
    if(isset($erreur)){
        echo $erreur1; 
    }
    ?>
    <label for="rester_connecte">Rester connecter</label>
    <input type="checkbox" name="rester_connecte" value="rester_connecte" id="">
    <button type="submit" name="submit">Se connecter</button>
</form>
    
</body>
</html>



<?php 
}else{
    header("Location: ../../index.php");
    exit();
}
?>