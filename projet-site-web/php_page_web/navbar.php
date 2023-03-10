<nav id="background-navbar" class="navbar navbar-expand-lg navbar-light">
    <img id="size-logo" src="img/logo_small.png" alt="celtic-logo">
	<a class="navbar-brand" href="https://www.baimmobilier.fr/celtic/" style="font-weight: bold;">Celtic La Riche</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span style="font-weight: bold;">Le Club</span> <!-- <i class='fa-solid fa-house' id="marge-btn-club"></i> -->
				</a>
                <div id="dropdown-color" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Le Bureau</a>
                    <a class="dropdown-item" href="#">Les Entraîneurs</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/club/inscription.php">Inscriptions</a>
                    <a class="dropdown-item" href="#">Les Horaires</a>
                    <a class="dropdown-item" href="#">Tarifs Licenses</a>
                    <a class="dropdown-item" href="#">Les Gymnases</a>
                    <a class="dropdown-item" href="#">Procès-Verbaux</a>
                    <a class="dropdown-item" href="#">Historique</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span style="font-weight: bold;">Mini Basket</span> <!-- <i class='fa-sharp fa-solid fa-basketball' id="marge-btn-club"></i> -->
				</a>
                <div id="dropdown-color" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/mini-basket/generalite.php">Généralités</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/mini-basket/u7f-m.php">U7 G&F</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/mini-basket/u9f-m.php">U9 G&F</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/mini-basket/u11f-m.php">U11 G&F</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span style="font-weight: bold;">Les équipes</span> <!-- <i class="fa-solid fa-people-group" id="marge-btn-club"></i> -->
				</a>
                <div id="dropdown-color" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/equipes/seniors.php">Séniors</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/equipes/u20m.php">U20 M</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/equipes/u15m.php">U15 M</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/equipes/u15f.php">U15 F</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/equipes/u13m.php">U13 M</a>
                    <a class="dropdown-item" href="https://www.baimmobilier.fr/celtic/equipes/u13f.php">U13 F</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
			</li>
			<li class="nav-item">
				<a style="font-weight: bold;" class="nav-link" href="https://www.baimmobilier.fr/eko/"><span></span> Boutique</a> <!-- class="fa-solid fa-cart-shopping" -->
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span style="font-weight: bold;">Photos</span> <!-- <i class="fa-solid fa-image" id="marge-btn-club"></i> -->
				</a>
                <div id="dropdown-color" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Année 2019-2020</a>
                    <a class="dropdown-item" href="#">Année 2018-2019 M</a>
                    <a class="dropdown-item" href="#">Année 2020-2021 M</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                  </div>
			</li>
			<li class="nav-item">
				<a style="font-weight: bold;" class="nav-link" href="https://www.baimmobilier.fr/celtic/partner/partenaire.php"><span></span> Partenaires</a> <!-- class='fa-solid fa-handshake' -->
			</li>
			<li class="nav-item">
				<a style="font-weight: bold;" class="nav-link" href="https://www.baimmobilier.fr/eko/connection/historique_commande.php"><span></span> Contact</a> <!-- class='fa-solid fa-envelope' -->
			</li>
            <li class="nav-item">
            <?php 
                if((isset($_SESSION['user']) and !empty($_SESSION['user'])) or (isset($_SESSION['admin']) and !empty($_SESSION['admin']))){
                    echo "<a class='nav-link' href='php_log/logout.php'><span class='fa-solid fa-envelope'></span> Logout</a>";
                }else{ 
                    echo "<a class='nav-link' href='form_login.php'><span class='fa-solid fa-envelope'></span> Login</a>";
                } 
                ?>
			</li>
		</ul>
	</div>
</nav>
