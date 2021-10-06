<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php
    /* page: inscription.php */
//connexion à la base de données:
require('../config.php');

//traitement du formulaire:
if(isset($_REQUEST['adresseMail'],$_REQUEST['mdp'])){
   $adresseMail = htmlspecialchars(trim($_POST['adresseMail']));
   $mdp = htmlspecialchars(trim($_POST['mdp']));
   $prenom = htmlspecialchars(trim($_POST['prenom']));
   $nom = htmlspecialchars(trim($_POST['nom']));
   $age = htmlspecialchars(trim($_POST['age']));
   $telephone = htmlspecialchars(trim($_POST['telephone']));

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
    <p>Vous êtes éjà inscrit? <a href="../Connexion/connexion.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>

    
   
    