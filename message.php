<?php
    include "ConnectBD.php";
    ?>
	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css"  /> 
	<link rel="stylesheet" type="text/css" href="resume.css" />
   <style>
    .testbutton {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border: 3;
        }

        .testbutton {
            background-color: rgb(177, 101, 138);
            color: while;
            text-decoration: dotted;
            border: 2px solid rgb(177, 101, 138);
        }

        .testbutton:hover {
            background-color: rgb(133, 66, 111);
            color: white;
        }
        </style>

<?php

$p=$_POST['user_mail'];
$n=$_POST['user_message'];
//commentaire3: construction de la requête d'insertion dans la table contact ayant les champs: Nom, Prenom, email
$r = "INSERT INTO message (mail,message,lu) VALUES ('$p','$n','NO')";
//commentaire4: exécution de la requête d'insertion
$resultat = $mysqli->query($r) or die ($mysqli->error());

echo "<br></br><label style='font-size: 25px'>Thank you for reaching out to me ! </label>";

?>
<br></br>
<br></br>
</form>
        
        <form  action="cvrawen.html">
        
          <button class = "testbutton" type="submit">
            
            Back to the Main CV page
            
          </button>