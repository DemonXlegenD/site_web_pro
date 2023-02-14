<?php

require "configuration.php";
echo "etape 0";
if(isset($_POST['submit'])){
    echo "etape 1";
    $identifiant = $_POST['identifiant'];
    $password = sha1($_POST['password']);
    if(isset($identifiant) and !empty($identifiant)){
        if(isset($password) and !empty($password))
        {
            echo "etape 2";
            if(filter_var($identifiant, FILTER_VALIDATE_EMAIL)){
                $stmt = $pdo->prepare("SELECT * FROM compte_client WHERE email_c=?");
                $stmt->bindParam(1,$identifiant);
                $stmt->execute();
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

            }else{
                echo "etape 4";
                $stmt = $pdo->prepare("SELECT * FROM compte_client WHERE identifiant_c=?");

                $stmt->bindParam(1,$identifiant);
                $stmt->execute();
                $res = $stmt->fetchAll();
                echo "identifiant";
                foreach ( $res as $row ) {
                    $_SESSION['user']['identifiant'] = $row['identifiant_c']; 
                    $_SESSION['user']['enom'] = $row['nom_c']; 
                    $_SESSION['user']['prenom'] = $row['prenom_c']; 
                    $_SESSION['user']['email'] = $row['email_c']; 
                    $_SESSION['user']['password'] = $row['password_c']; 
                    $_SESSION['user']['telephone'] = $row['telephone_c']; 
                    $_SESSION['user']['anniversaire'] = $row['date_anniversaire_c']; 
                }
            }
            header("Location: ../index.php");
            exit();
        
        }
        
    }
}



?>