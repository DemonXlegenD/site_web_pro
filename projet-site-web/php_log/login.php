<?php

require "configuration.php";


if(isset($_POST['submit'])){
    $erreur_login = "";
    $identifiant = htmlspecialchars(trim($_POST['identifiant']), ENT_QUOTES, 'UTF-8');
    $password = sha1($_POST['password']);
    if(isset($identifiant) and !empty($identifiant)){
       
        if(isset($password) and !empty($password))
        {
   
            if(filter_var($identifiant, FILTER_VALIDATE_EMAIL)){
           
                $stmt = $pdo->prepare("SELECT * FROM compte_client WHERE email_c=? AND password_c=?");
                $stmt->execute(array($identifiant,$password));

                $valid = $stmt->rowCount();

                if($valid)
                {
                    session_start();
                    $res = $stmt->fetchAll();
                    foreach ( $res as $row ) {
                        $_SESSION['user']['identifiant'] = $row['identifiant_c']; 
                        $_SESSION['user']['nom'] = $row['nom_c']; 
                        $_SESSION['user']['prenom'] = $row['prenom_c']; 
                        $_SESSION['user']['email'] = $row['email_c']; 
                        $_SESSION['user']['password'] = $row['password_c']; 
                        $_SESSION['user']['telephone'] = $row['telephone_c']; 
                        $_SESSION['user']['anniversaire'] = $row['date_anniversaire_c']; 
                    }

                    header("Location: ../index.php");
                    exit();
                }else{
                   
                    $erreur_login ="Identifiant ou mot de passe incorrecte";
                    
                }
                

                

            }else{
               
                $stmt = $pdo->prepare("SELECT * FROM compte_client WHERE identifiant_c=? AND password_c=?");

                $stmt->execute(array($identifiant,$password));

                $valid = $stmt->rowCount();

                if($valid)
                {
                   
                    $res = $stmt->fetchAll();
                    foreach ( $res as $row ) {
                        $_SESSION['user']['identifiant'] = $row['identifiant_c']; 
                        $_SESSION['user']['enom'] = $row['nom_c']; 
                        $_SESSION['user']['prenom'] = $row['prenom_c']; 
                        $_SESSION['user']['email'] = $row['email_c']; 
                        $_SESSION['user']['password'] = $row['password_c']; 
                        $_SESSION['user']['telephone'] = $row['telephone_c']; 
                        $_SESSION['user']['anniversaire'] = $row['date_anniversaire_c']; 
                    }
                    header("Location: ../index.php");
                    exit();
                }
                else
                {     
                    $erreur_login ="Identifiant ou mot de passe incorrecte";     
                } 
            }   
        }
        else
        {
            $erreur_login ="Identifiant ou mot de passe incorrecte";    
        }
    }
    else
    {
        $erreur_login ="Identifiant ou mot de passe incorrecte";   
    }
}
?>