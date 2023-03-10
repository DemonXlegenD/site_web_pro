<?php 
require "configuration.php";
if(isset($_SESSION['user']) and !empty($_SESSION['user']))
{
   unset($_SESSION['user']); 
   session_destroy();

}
else if(isset($_SESSION['admin']) and !empty($_SESSION['admin']))
{
    unset($_SESSION['admin']); 
    session_destroy();
}
else
{
    echo "erreur";
}

header('Location: ../index.php');
exit();

?>