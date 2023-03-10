<?php

include "configuration.php";
/*Vérifier si le formulaire a été soumis*/
if(isset($_POST['submit']))
{
    $erreur_signup ="";
    // Traiter le formulaire
    
    /*Identité de la personne*/
    $name = htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8');
    $firstname = htmlspecialchars(trim($_POST['prenom']), ENT_QUOTES, 'UTF-8');

    /*JOUR MOIS ANNEE De la date de naissance*/
    $day = $_POST['jour'];
    $month = $_POST['mois'];
    $year = $_POST['annee'];

    /*Coordonnée numérique de la personne*/
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
    $tel = str_replace(' ', '', trim($_POST['telephone']));


    /*Mot de passe*/
    $password = sha1($_POST['password']);
    $confirm_password = sha1($_POST['confirm_password']);
    
    /*Identifiant qui va être afficher sur la page*/
    $identifiant = htmlspecialchars($_POST['identifiant'], ENT_QUOTES, 'UTF-8');

    /*La session de l'utilisateur reste active*/
    $reste_co = $_POST['rester_connecte'];

    /*Vérifier le jeton CSRF*/
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Erreur CSRF : le jeton est invalide.");
    }

    if(isset($name) and !empty($name) and preg_match('#^(?=.*[a-z])(?=.*[A-Z])#', $name)){
        
        if(isset($firstname) and !empty($firstname) and preg_match('#^(?=.*[a-z])(?=.*[A-Z])#', $firstname)){
            
            if(isset($email) and !empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL)){
                
                if((isset($day) and !empty($day) and ($day<=31 and $day>=1)) and (isset($month) and !empty($month) and ($month<=12 and $month>=1)) and (isset($year) and !empty($year) and ($year<=2014 and $year>=1930)) and checkdate($month, $day, $year)){
                    $birthday = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];
                    
                    if(isset($tel) and !empty($tel) and preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $tel) || preg_match("#[0][7][- \.?]?([0-9][0-9][- \.?]?){4}$#", $tel)){
                        
                        if(isset($identifiant) and !empty($identifiant) and preg_match('#^(?=.*[a-z])(?=.*[A-Z])#', $identifiant)){
                            
                            if(isset($password) and !empty($password)){
                                
                                if(isset($confirm_password) and !empty($confirm_password)){
                                    
                                    if($password == $confirm_password){

                                        
                                        $sql = "INSERT INTO compte_client (id_c, nom_c, prenom_c, email_c, password_c, identifiant_c, telephone_c, date_anniversaire_c) VALUES (NULL, :name, :firstname, :email, :password, :identifiant, :telephone, :birthday)";
                                        $pre = $pdo->prepare($sql);

                                        $pre->execute(array(
                                            ':name' => $name,
                                            ':firstname' => $firstname,
                                            ':email' => $email,
                                            ':password' => $password,
                                            ':identifiant' => $identifiant,
                                            ':telephone' => $tel,
                                            ':birthday' => $birthday
                                        ));
                                        if(isset($reste_co) and !empty($reste_co))
                                        {
                                            session_start();
                                            $stmt = $pdo->prepare("SELECT * FROM compte_client WHERE nom_c=?");

                                            $stmt->bindParam(1,$name);
                                            $stmt->execute();
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
                                        }

                                        // Réinitialiser le jeton CSRF
                                        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

                                        header("Location:../index.php");
                                        exit();
                                    }else{
                                        $erreur_signup ="Le mot de passe est différent";
                                        header("Location:../form_signup.php");
                                        exit(); 
                                    }

                                }else{
                                    $erreur_signup="Veuillez confirmer votre mot de passe";
                                    header("Location:../form_signup.php");
                                    exit(); 
                                }
                            }else{
                                $erreur_signup="Veuillez entrez un mot de passe";
                                header("Location:../form_signup.php");
                                exit(); 
                            }
                        }else{
                            $erreur_signup="Veuillez entrer un identifiant";
                            header("Location:../form_signup.php");
                            exit(); 
                        }
                    }else{
                        $erreur_signup="Veuillez entrer votre numéro de téléphone";
                        header("Location:../form_signup.php");
                        exit(); 
                    }
                }else{
                    $erreur_signup="Veuillez entrer votre date de naissance";
                    header("Location:../form_signup.php");
                    exit(); 
                }
            }else{
                $erreur_signup="Veuillez entrer votre email";
                header("Location:../form_signup.php");
                exit(); 
            }
        }else{
            $erreur_signup="Veuillez entrer votre prénom";
            header("Location:../form_signup.php");
            exit(); 
        }
    }else{
        $erreur_signup="Veuillez entrer votre nom";
        header("Location:../form_signup.php");
        exit(); 
    }
    
}
?>