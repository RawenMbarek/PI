<?php
include "connectBD.php";
?>
<html>
    <head>

<style>
html {
	
	background: #edced8;
	
}
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

.form {

  margin: 0 auto;
  width: 600px;
  
  padding: 1em;
  border: 3px solid rgb(177, 101, 138);
  border-radius: 1em;
  background-color: white; 
 
}

form div + div {
  margin-top: 1em;
}

label {
  
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
 
  font: 1em sans-serif;

  
  width: 300px;
  box-sizing: border-box;

  
  border: 3px solid rgb(228, 173, 200);
}

input:focus, textarea:focus {
  
  border-color: #000;
}

textarea {
  
  vertical-align: top;

  
  height: 5em;
}

.button {
  
  background-color: white; 
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


}
.button:hover {
  background-color: rgb(177, 101, 138);
  color: white;
}
</style>
<?php
$requete= 'SELECT * FROM message where id='.$_GET["id"];
    $resultat=$mysqli-> query($requete) or die ($mysqli-> error());
   $ligne= $resultat->fetch_assoc();
    ?>
    <body>
    <br> </br>
<br> </br>
<br> </br>
<form class="form" action="update.php" method="post">
			<div class="h2000">
				<H3> Update Message: </H3>
			</div>
				<div>
					<label for="mail">mail:</label>
					<input type="email" id="mail" name="user_mail"   value="<?php echo $ligne["mail"] ; ?>" required>
				</div>
				<div>
        <td><input type="hidden" name="id"  value="<?php echo $ligne["id"]; ?>"  required/></td>
					<label for="msg">Message :</label>
					<textarea id="msg" name="user_message" required="required"  ><?php echo $ligne["message"] ; ?></textarea>
				</div>
				<div >
					<button class="button" type="submit">Update Message</button>
                    <button class="button" type="reset">Cancel</button>
				</div>
			</form>
               
               <br>
               <br>
               
            </body>
            <form  class="form" action="adminConf.php">
          
            <center><button  class = "testbutton" type="submit" </center>
            
            Back to Admin page 
            
          </button>
        </div>  
</html>