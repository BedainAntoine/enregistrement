<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device=width-device">
	<meta name="description" content="Affordable Web Development, Professional Web Development">
	<meta name="keyword" content="Wev Development, Web Design">
	<meta name="author" content="Alexandre Anania, Programmer and Developer">
	<title>Fab-Fashion</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
	<section id="banner">
		<header>
			<div class="shape">
				<div class="logo">
					<img src="Images/logo.png">
				</div>
				<nav>
					<ul>
						<li><a href="#">Qui sommes Nous?</a></li>
						<li><a href="#">Nos Services</a>
							<ul class="nav-has-dropdown">
								<li><a href="#">Formation</a></li>
								<li><a href="#">Logement</a></li>
								<li><a href="#">Aide</a></li>
							</ul>
						</li>
						<!--<li><a href="#">Contacts</a></li>-->
						<li><a href="#ancre-contact">Nous Contactez</a></li>
					</ul>
				</nav>
			</div>
		</header>
	</section>
    
<?php
    /* page: inscription.php */
//connexion à la base de données:
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'bitnami');
define('DB_PASSWORD', 'mdpdebian');
define('DB_NAME', 'workshop');

$bdd = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($bdd === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

$sql= 'INSERT INTO adresse SET adresse='".$_POST['adresse']."'"';
//traitement du formulaire:
if(isset($_REQUEST['adresseMail'],$_REQUEST['mdp'])){
   $adresseMail = mysqli_real_escape_string($bdd, $adresseMail);
   $mdp = mysqli_real_escape_string($bdd, $mdp);
   $prenom = mysqli_real_escape_string($bdd,$prenom);
   $nom = mysqli_real_escape_string($bdd, $nom);
   $age = mysqli_real_escape_string($bdd, $age);
   $telephone = mysqli_real_escape_string($bdd, $telephone);

   $query = "INSERT INTO utilisateur (id, adresseMail, prenom, nom, age, telephone, mdp) VALUES ('','$adresseMail', '$prenom', '$nom', '$age', '$telephone', '".hash('sha256', $mdp)."')";

   $res = mysqli_query($bdd, $query);
   if($res){
       echo "<div>
            <h3> Vous etes inscrit avec succès </h3>
            <p>Clique <a href='../Connexion/connexion.php'> ici pour te connecter akhy</a></p></div> "
   }
}else{
    ?>
    <form action="" method="post">
    <h1>Inscription</h1>
    <input type="text" name="email" placeholder="Email" required />
    <input type="password" name="mdp" placeholder="Mot de passe" required />
    <input type="text" name="prenom" placeholder="Prenom" required />
    <input type="text" name="nom" placeholder="Nom" required />
    <input type="text" name="telephone" placeholder="Telephone" required />
    <input type="text" name="age" placeholder="Age" required />

    <input type="submit" name="submit" value="S'inscrire"/>
    <p>Vous êtes éjà inscrit? <a href="connexion.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
<footer>
		<div class="shape">
			<div class="flex">
				<div class="flexbox">
					<h3>Our Collections</h3>
					<ul>
						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Men's Fashion</a></li>

						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Women's Fashion</a></li>

						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Kid's Fashion</a></li>

						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Winter Collections</a>
						</li>

						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Summer Collections</a>
						</li>

						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Western Dresses</a></li>

						<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Classical Dresses</a>
						</li>
					</ul>
				</div>

                <div class="flexbox">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#"><i class="fa fa-chevron-right"></i> video gallery</a></li>

						<li><a href="#"><i class="fa fa-chevron-right"></i> photo gallery</a></li>

						<li><a href="#"><i class="fa fa-chevron-right"></i> clothes gallery</a></li>

						<li><a href="#"><i class="fa fa-chevron-right"></i> men's wearing gallery</a></li>

						<li><a href="#"><i class="fa fa-chevron-right"></i> women's wearing gallery</a></li>

						<li><a href="#"><i class="fa fa-chevron-right"></i> kid's wearing gallery</a></li>

						<li><a href="#"><i class="fa fa-chevron-right"></i> shoes gallery</a></li>
					</ul>
				</div>

				<div class="vrt"></div>

				<div class="flexbox">
					<h4>sign up for our <span>newsletter<span></h4>
					<form>
						<input class="email" type="email" placeholder="email@exampl.com" required="">
						<input class="btn" type="submit" value="Submit">
						<form>
							<ul class="UL">
								<li class="LI"><a class="A" href="#"><i class="fa fa-facebook"></i></a></li>

								<li class="LI"><a class="A" href="#"><i class="fa fa-instagram"></i></a></li>

								<li class="LI"><a class="A" href="#"><i class="fa fa-behance"></i></a></li>

								<li class="LI"><a class="A" href="#"><i class="fa fa-pinterest"></i></a></li>

								<li class="LI"><a class="A" href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
				</div>

				<div class="vrt"></div>

				<div class="flexbox">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.8510030465463!2d91.89378981464543!3d24.9030634496826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054b0ba3bfc31%3A0x440e26129f288571!2sBaluchar%20Point!5e0!3m2!1sen!2sbd!4v1577212160587!5m2!1sen!2sbd"
						width="300" height="300" frameborder="0" style="border:0; opacity: 0.8;"
						allowfullscreen=""></iframe>
				</div>
			</div>
			<p>Copyright &copy; 2019 www.helpDysWorld.com all right reserved || Design By <span
					style="color: #e81f6b;">Qaddouri Yahya</span></p>
		</div> 
</footer>
</body>
</html>