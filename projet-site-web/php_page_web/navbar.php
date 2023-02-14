<nav>
        
    
    <a href="#">NOS PRODUITS</a>
    <a href="#">PERSONNALISER</a>
    <a href="#">GALERIE</a>
    <a href="#">SUPPORT/SAV</a>
    <a href="#">FAQ</a>
    <a href="#">CONTACT</a>
    <?php 
    if((isset($_SESSION['user']) and !empty($_SESSION['user'])) or (isset($_SESSION['admin']) and !empty($_SESSION['admin']))){
        echo "<a href='php_log/logout.php'>LOGOUT</a>";
    }else{ 
        echo "<a href='form_login.php'>LOGIN</a>";
    } 
    ?>
    
    <input type="text" placeholder="Rechercher">
       
</nav>