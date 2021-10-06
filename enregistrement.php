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



	<section id="Contact">
		<div id="ancre-contact" class="shape">
			<div class="contact-header">
				<h1>Formulaire d'inscription</h1>
			</div>
			<div class="Form">
				<form method="POST">
					<label>Votre nom :</label>
					<div class="inp">
						<input type="text" spellcheck="true" required="true" name="nom">
					</div>
					<label>Votre prénom :</label>
					<div class="inp">
						<input type="text" spellcheck="true" required="true" name="prenom">
					</div>
					<label> Êtes-vous : </label>
                    <div class="inp">
                        <select name="sexe" required="true">
                            <option value="femme">Une femme</option>
                            <option value="homme">Un homme</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
					<label>Votre âge :</label>
					<div class="inp">
						<input type="text" spellcheck="true" required="true" name="age">
					</div>
					<label>Votre numéro de téléphone :</label>
					<div class="inp">
						<input type="text" spellcheck="true" required="true" name="telephone">
					</div>
					<label>Votre adresse email :</label>
					<div class="inp">
						<input type="email" spellcheck="true" required="true" name="adresseMail">
					</div>
					<label>Votre ville :</label>
					<div class="inp">
						<input type="text" spellcheck="true" required="true" name="ville">
					</div>
					<label>Votre mot de passe :</label>
					<div class="inp">
						<input type="password" spellcheck="true" required="true" name="mdp">
					</div>
					<label>Êtes-vous ?</label>
					<div class="inp">
						<select name="groupe">
							<option valeur="membre">En situation de handicap</option>
							<option valeur="logement">Un proprietaire</option>
							<option valeur="formation">Un formateur</option>
						</select>
					</div>
					<div class="btn">
						<input type="submit" a href="Dyscovery.php" value="Je m'inscris !">
					</div>
				</form>
			</div>
		</div>
	</section>

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

        <?php
    
    /* page: inscription.php */
//connexion à la base de données:
$BD_serveur     = "localhost";
$BD_utilisateur = "bitnami";
$BD_motDePasse  = "mdpdebian";
$BD_base        = "workshop";

$mysqli = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8', 'bitnami', 'mdpdebian');

@mysqli_connect($BD_serveur, $BD_utilisateur, $BD_motDePasse)
    or die("Impossible de se connecter au serveur de bases de données.");
@mysqli_select_db($BD_base)
    or die("Impossible de se connecter à la base de données.");//fichier de log
 
	//traitement du formulaire:
	if(isset($_POST['adresseMail'],$_POST['mdp'],$_POST['sexe'],$_POST['prenom'],$_POST['nom'],$_POST['age'],$_POST['groupe'], $_POST['telephone'] )){
		if(empty($_POST['adresseMail'])){
			echo "Le champ adresse mail est vide.";
		} elseif(!preg_match("^[a-z0-9]+([-._]?[a-z0-9]+)*+@?[a-z0-9]+([-._]?[a-z0-9]+)",$_POST['adresseMail'])){
			echo "Le format de l'adresse mail ne semble pas conforme";
		} elseif(empty($_POST['mdp'])){
			echo "Le champ mot de passe est vide.";
		} elseif(empty($_POST['nom'])){
			echo "Le champ nom est vide.";
		} elseif(empty($_POST['prenom'])){
			echo "Le champ prenom est vide.";
		} elseif(empty($_POST['telephone'])){
			echo "Le champ telephone est vide.";
		}
		} elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM utilisateur WHERE adresseMail='".$_POST['adresseMail']."'"))==1){
			echo "Désolé, cette adresse email est déjà utilisée.";
		} else {
			if(!mysqli_query($mysqli, "INSERT INTO utilisateur SET adresseMail='".$_POST['adresseMail']."', mdp='".md5($_POST['mdp'])."', sexe='".$_POST['sexe']."', prenom='".$_POST['prenom']."', nom='".$_POST['nom']."', age='".$_POST['age']."', groupe='".$_POST['groupe']."', telephone='".$_POST['telephone']."'")){
				echo "Une erreur s'est produite: ";//.mysqli_error($mysqli);
			} else {
				echo "Vous êtes inscrit avec succès!";
			}
		}
		?>
	</footer>
</body>

</html>