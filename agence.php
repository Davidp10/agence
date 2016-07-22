<?php
session_start();
$_SESSION['Civil']=$_GET['civil'];
$_SESSION['Nom']=$_GET['nom'];
$_SESSION['Prenom']=$_GET['prenom'];
$_SESSION['Choix']=$_GET['choix'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/agence.css">
   <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
   <title>agence</title>
 </head>
 <body>
   <div id = "photo1">
     <div id = "form">

       <?php
       if ($_SESSION['Choix'] =='un voyage') {
         echo '<div class ="carregr1">
         <form action="recapitulatif.php" method="get">
         <br><span>Choix voyage:</span><br>
         <select class="bouton3" name="prix"><option value="Ibiza!!! TechnoTrance 100 €">Ibiza!!! TechnoTrance 100 €</option><option value="Tchernobil!!! Au calme 13 €">Tchernobil!!! Au calme 13 €</option>
         </select>
         <br><span>Nombre de personnes :</span><input required="" class="pers" type="number" name="personnes" min="1" max="100"><br>
         <br><input class="submit1" type="submit" name="boutton" value="estimation">
         </form>
         </div>';
       }
       else {
         echo '<div class ="carregr2">
         <form action="recapitulatif.php" method="get">
         <br><span>Choix d\'excursion:</span>
         <select class="bouton3" name="prix"><option value="Paris Plage!!baignade interdite 50 €">Paris Plage!!baignade interdite 50 €</option><option value="Ile caimans !! Baignade aussi interdite 600 €">Ile caimans !! Baignade aussi interdite 600 €</option>
         </select>
         <br><span>Nombre de personnes :</span><input required="" class="pers" type="number" name="personnes" min="1" max="100"><br>
         <br><input class="submit1" type="submit" name="boutton" value="estimation">
         </form>
         </div>';
       }
       ?>
     </div>
   </div>
 </body>
 </html>
