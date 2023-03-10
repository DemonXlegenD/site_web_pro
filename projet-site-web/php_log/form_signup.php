<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php 
    
    require "signup.php"; 
    
    /* Générer un jeton CSRF*/
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
?>

<!-- FORMULAIRE D'INSCRIPTION-->

<form class="flex-start" action="signup.php" method="post">

    <!--PRENOM-->
    <label for="prenom">Prénom: </label>
    <input type="text" name="prenom"  id="" placeholder="Votre prénom" require>

    <!--NOM-->
    <label for="nom">Nom: </label>
    <input type="text" name="nom" id=""  placeholder="Votre nom" require>

    <!--EMAIL-->
    <label for="email">Email: </label>
    <input type="email" name="email"  id="" placeholder="Votre email" require>

    <!--MOT DE PASSE-->
    <label for="password">Mot de passe: </label>
    <input type="password" name="password" minlength="8" id="" placeholder="Votre mot de passe" require>

    <!--CONFIRMATION DU MOT DE PASSE-->
    <label for="confirm_password">Confirmez le mot de passe: </label>
    <input type="password" name="confirm_password" minlength="8"  id="" placeholder="Veuillez confirmer votre mot de passe" require>

    <!--IDENTIFIANT-->
    <label for="identifiant">Identifiant: </label>
    <input type="text" name="identifiant" id="" placeholder="Choisissez un identifiant" require>

    <!--TELEPHONE-->
    <label for="telephone">Téléphone: </label>
    <input type="tel" name="telephone" id="" placeholder="Votre numéro de téléphone" require>

    <!--DATE D'ANNIVERSAIRE-->
    <label for="date_anniversaire">Date d'anniversaire: </label>
    <div>
        <!--JOUR-->
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
    
    <?php if(isset($erreur_signup)){
        echo $erreur_signup; 
    }
    ?>
    <label for="rester_connecte">Rester connecter</label>
    <input type="checkbox" name="rester_connecte" value="rester_connecte" id="">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <button type="submit" name="submit">Se connecter</button>
</form>
    
</body>
</html>


