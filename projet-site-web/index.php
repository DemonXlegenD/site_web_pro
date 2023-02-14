<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PJC</title>
    
</head>
<body>
    <?php 
    require "php_log/configuration.php";
    require "php_page_web/header.php";
    require "php_page_web/navbar.php"; 
    if(isset($_SESSION['user']) and !empty($_SESSION['user']))
    {
        echo $_SESSION['user']['identifiant'];
    }else{
        echo "wtf";
    }
    ?>
    

    <?php 
        require "php_page_web/footer.php";
    ?>
    
</body>
</html>