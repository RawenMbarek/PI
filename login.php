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
$e=$_POST['email'];
$n=$_POST['password'];
$r ='SELECT * from user where email="'.$e.'"';
$resultat = $mysqli->query($r) or die ($mysqli->error());  
$r= $resultat -> fetch_assoc();
    if(empty($r)){
      echo '<br> </br> <br> </br>';
      echo '<label style="font-size: 40px">Wrong E-Mail</label>';
      echo '<br> </br> <br> </br>';

    }elseif($r['password']!=$n){
        echo '<br> </br> <br> </br>';
        echo '<label style="font-size: 40px">Wrong password</label>';
        echo '<br> </br> <br> </br>';
    }else{
        header("Location:adminConf.php");
        exit();
    }
?>
</form>
        
        <form class="" action="loginadmin.html">
        
          <button class = "testbutton" type="submit">
            
            Back to Login  
            
          </button>
        </div>  
