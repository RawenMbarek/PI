<?php
    include "ConnectBD.php";
    ?>
	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css"  /> 
	<link rel="stylesheet" type="text/css" href="resume.css" />
 <style>   .button {
  /* Pour placer le bouton à la même position que les champs texte */
   /* même taille que les étiquettes */
  background-color:rgb(177, 101, 138); 
  color: rgb(117, 0, 86); 
  text-decoration: none;
  border: 2px solid rgb(177, 101, 138);
  font-size: medium;
  font-style: italic;
  position: initial;
  margin-left: 100px;
  cursor: pointer;
  transition-duration: 0.4s;
  padding: 10px 20px;
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
.button:hover {
    background-color: rgb(133, 66, 111);
  color: white;
}
</style>
<?php
//commentaire2: récupération des données du formulaire
$log=$_POST['email'];

//commentaire 3: construire la reqûete
$requete = "SELECT * FROM user WHERE email ='$log'";

//commentaire 4: exécution de la reqûete
$resultat = $mysqli->query($requete) or die ($mysqli->error());

//commentaire 5: vérification du résultat retourné
if($ligne = $resultat->fetch_assoc())
		echo "<br></br><label  style='font-size: 25px'>Your Password is : </label>"."<label style='font-size: 25px' >".$ligne['password']."</label>";

else echo "<br></br><label style='font-size: 25px'>Invalid Account , You have to Sign up First <a href='create.php'>Sign Up</a></label>";
?>
</table>
<br> </br>
<br> </br>
<br> </br>
</form>
        
          <form class="" action="adminConf.php">
          
            <button class = "button" type="submit">
              
              Back to Admin page 
              
            </button>
          </div>  
