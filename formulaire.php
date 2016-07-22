<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="css/agence.css" media="screen">
   <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
   <title>test form </title>
 </head>
 <body>
   <div id="photo">
     <div id="form">
       <form class="form" action="agence.php" method="get">
         <select class="bouton" name="civil">
           <option value="Mme">Mme</option>
           <option value="Mr">Mr</option>
         </select>
         <table>
           <tr><td>Nom :</td><td><input type="text" name="nom" class="nom" required=""></td></tr>
           <tr><td>Prénom :</td><td><input type="text" name="prenom" class="prenom" required=""></td></tr>*
         </table>
         <input required=""class="choix "type="radio" name="choix" value="un voyage"><span>  Voyage<span><br>
         <input  type="radio" name="choix" value="une excursion"> <span>  Excursion</span>

         <br><br>
         <input class="submit" type="submit">
       </form>
     </div>
   </div>
 </body>
 </html>
