<?php

require "configuration_admin.php";

if(isset($_POST['submit'])){
    $erreur_login = "";
    
    $identifiant = $_POST['identifiant'];
    $password = sha1($_POST['password']);
    if(isset($identifiant) and !empty($identifiant)){
        if(isset($password) and !empty($password))
        {

            if(filter_var($identifiant, FILTER_VALIDATE_EMAIL)){
                $stmt = $pdo->prepare("SELECT * FROM admin WHERE email_a=? AND password_a=?");
                $stmt->execute(array($identifiant,$password));

                $valid = $stmt->rowCount();

                if($valid)
                {
                    $res = $stmt->fetchAll();
                    foreach ( $res as $row ) {
                        $_SESSION['admin']['identifiant'] = $row['identifiant_a']; 
                        $_SESSION['admin']['nom'] = $row['nom_a']; 
                        $_SESSION['admin']['prenom'] = $row['prenom_a']; 
                        $_SESSION['admin']['email'] = $row['email_a']; 
                        $_SESSION['admin']['password'] = $row['password_a']; 
                        $_SESSION['admin']['telephone'] = $row['telephone_a']; 
                        $_SESSION['admin']['anniversaire'] = $row['date_anniversaire_a']; 
                    }

                    header("Location: ../../index.php");
                    exit();
                }else{
                    $erreur_login ="Identifiant ou mot de passe incorrecte";
                    header("Location: ../page_admin/form_login_admin.php");
                    exit();
                }
                

                

            }else{
             
                $stmt = $pdo->prepare("SELECT * FROM admin WHERE identifiant_a=? AND password_a=?");

                $stmt->execute(array($identifiant,$password));

                $valid = $stmt->rowCount();

                if($valid)
                {
                    $res = $stmt->fetchAll();
                    foreach ( $res as $row ) {
                        $_SESSION['admin']['identifiant'] = $row['identifiant_a']; 
                        $_SESSION['admin']['enom'] = $row['nom_a']; 
                        $_SESSION['admin']['prenom'] = $row['prenom_a']; 
                        $_SESSION['admin']['email'] = $row['email_a']; 
                        $_SESSION['admin']['password'] = $row['password_a']; 
                        $_SESSION['admin']['telephone'] = $row['telephone_a']; 
                        $_SESSION['admin']['anniversaire'] = $row['date_anniversaire_a']; 
                    }
                    header("Location: ../../index.php");
                    exit();
                }
                else{
                    $erreur_login ="Identifiant ou mot de passe incorrecte";
                    // header("Location: ../page_admin/form_login_admin.php");
                    // exit();
                }
                

            }
            
        
        }else{
            $erreur_login ="Identifiant ou mot de passe incorrecte";
            header("Location: ../page_admin/form_login_admin.php");
            exit();
        }
        
    }else{
        $erreur_login ="Identifiant ou mot de passe incorrecte";
        header("Location: ../page_admin/form_login_admin.php");
        exit();
    }
}




?>