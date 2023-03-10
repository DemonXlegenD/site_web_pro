<header class="space-between">
    
    <div>
        <img src="img/logo/logo1.png" alt="logo du site web">
        <img src="img/logo/logo1.png" alt="logo du site web"> 
    </div>

    <div>
        
            <a href="form_signup.php">

                <img id="img_compte" src="img/logo/logocompte.png" alt="logo du compte">
                <?php if(isset($_SESSION['user']) and !empty($_SESSION['user']))
                    {
                        echo $_SESSION['user']['identifiant'];
                    }else if(isset($_SESSION['admin']) and !empty($_SESSION['admin']))
                    {
                        echo "Admin ".$_SESSION['admin']['identifiant'];
                    }
                ?>
        
            </a>
            
        
        
            
        <img src="img/logo/logo1.png" alt="logo du site web"> 
    </div>

</header>