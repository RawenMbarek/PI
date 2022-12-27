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
    $requete='delete from message where id='.$_GET['id'];
    $resultat=$mysqli-> query($requete) or die ($mysqli-> error());
    echo "<br></br><label style='font-size: 25px'>Message successfully removed</label>";



?>
<br>
<br>
<div> 
<form  class="form" action="adminConf.php">
          
          <center><button  class = "testbutton" type="submit" </center>
          
          Back to Admin page 
          
        </button>
</form>
</div>