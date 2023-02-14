<?php 
require "configuration.php";
if(isset($_SESSION['user']) and !empty($_SESSION['user']))
{
   unset($_SESSION['user']); 

}
else if(isset($_SESSION['admin']) and !empty($_SESSION['admin']))
{
    unset($_SESSION['admin']); 
}
else
{
    echo "erreur";
}

header('Location: ../index.php');
exit();

?>