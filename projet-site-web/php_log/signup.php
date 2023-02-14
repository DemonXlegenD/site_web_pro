<?php

include "configuration.php";

$erreur1 ="";

if(isset($_POST['submit']))
{
    echo "étape 1";
    /*Identité de la personne*/
    $name = $_POST['nom'];
    $firstname = $_POST['prenom'];

    /*JOUR MOIS ANNEE De la date de naissance*/
    $day = $_POST['jour'];
    $month = $_POST['mois'];
    $year = $_POST['annee'];

    /*Coordonnée numérique de la personne*/
    $email = $_POST['email'];
    $tel = $_POST['telephone'];

    /*Mot de passe*/
    $password = sha1($_POST['password']);
    $confirm_password = sha1($_POST['confirm_password']);
    
    /*Identifiant qui va être afficher sur la page*/
    $identifiant = $_POST['identifiant'];

    /*La session de l'utilisateur reste active*/
    $reste_co = $_POST['rester_connecte'];

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
                                            $stmt = $pdo->prepare("SELECT * FROM compte_client WHERE nom_c=?");

                                            $stmt->bindParam(1,$name);
                                            $stmt->execute();
                                            $res = $stmt->fetchAll();

                                            foreach ( $res as $row ) {
                                                $_SESSION['user']['identifiant'] = $row['id_c']; 
                                                $_SESSION['user']['enom'] = $row['nom_c']; 
                                                $_SESSION['user']['prenom'] = $row['prenom_c']; 
                                                $_SESSION['user']['email'] = $row['email_c']; 
                                                $_SESSION['user']['password'] = $row['password_c']; 
                                                $_SESSION['user']['telephone'] = $row['telephone_c']; 
                                                $_SESSION['user']['anniversaire'] = $row['date_anniversaire_c']; 
                                            }
                                        }

                                        header("Location:../index.php");
                                        exit();
                                    }else{
                                        $erreur1 ="Le mot de passe est différent";
                                        
                                    }

                                }else{
                                    $erreur1="Veuillez confirmer votre mot de passe";
                                    
                                }
                            }else{
                                $erreur1="Veuillez entrez un mot de passe";
                                
                            }
                        }else{
                            $erreur1="Veuillez entrer un identifiant";
                           
                        }
                    }else{
                        $erreur1="Veuillez entrer votre numéro de téléphone";
                        
                    }
                }else{
                    $erreur1="Veuillez entrer votre date de naissance";
                    
                }
            }else{
                $erreur1="Veuillez entrer votre email";
                
            }
        }else{
            $erreur1="Veuillez entrer votre prénom";
            
        }
    }else{
        $erreur1="Veuillez entrer votre nom";
        
    }
    
}

?>