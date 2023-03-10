<?php 
if(isset($_SESSION['admin']) and !empty($_SESSION['admin']))
{
?>


<?php 
}else{
    header("Location: ../../index.php"):
    exit();
}?>