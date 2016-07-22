<?php
session_start();
$_SESSION['Prix']=$_GET['prix'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title>recapitulatif</title>
   <link rel="stylesheet" href="css/agence.css" media="screen">
   <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
 </head>
 <body>
   <div id= photo2>
     <div class="globale" id="form">
       <div class="carre_gris">
         <?php
         if ($_GET['prix']=="Ibiza!!! TechnoTrance 100 €") {
           $prix=100;
         }if ($_GET['prix']=="Tchernobil!!! Au calme 13 €") {
           $prix=13;
         } if ($_GET['prix']=="Paris Plage!!baignade interdite 50 €") {
           $prix=50;
         }else {
           $prix=600;
         }
         $prixtotal=$prix*$_GET['personnes'];
         echo '<h1>Résumé de votre demande</h1>';

         echo '<span2>Bonjour, '.$_SESSION['Civil'].' '.$_SESSION['Nom'].' '.$_SESSION['Prenom'].'<br>
         Vous avez choisi '.$_SESSION['Choix'].' au prix de '.$prix.' par personne<br>
         Vous nous avez indiqué '.$_GET['personnes'].' personne<br>

         Le montant total est de '.$prixtotal.'€ </span2><br><br>';
         ?>
         <a href="<?php echo 'formulaire.php' ?>" >Retour au formulaire</a>
       </div>
     </div>
   </div>
 </body>
 </html>
