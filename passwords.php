
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
            background-color:rgb(133, 66, 111);
            color: while;
            text-decoration: dotted;
            border: 2px solid rgb(133, 66, 111);
        }

        .testbutton:hover {
            background-color: rgb(108, 49, 88);
            color: white;
        }

       

        .flatBlue thead {
            background-color: rgb(177, 101, 138);
            border: 3px solid rgb(177, 101, 138);
            color: rgb(177, 101, 138);
        }

        .flatBlue thead tr th {
            /*border-right: 1px solid #0278ae;*/
            border-right: 1px solid rgb(177, 101, 138);
            padding: 9px 20px 9px 10px;
            font-weight: bold;
            font-size: 5em;
            text-shadow: 0 1px 0 rgb(177, 101, 138);
        }

        .flatBlue table>thead>tr>th {
            border: 1px solid rgb(177, 101, 138);
        }

        .flatBlue td {
            padding: 2px 15px 1px 10px;
            border-color: rgb(177, 101, 138);
        }

        .flatBlue tbody td:first-of-type {
            border-left: 2px solid rgb(177, 101, 138);
        }

        

        .flatBlue tbody tr:last-of-type {
            border-bottom: 3px solid rgb(177, 101, 138);
        }

        .flatBlue tbody tr:first-of-type {
            border-top: 3px solid rgb(177, 101, 138);
        }

        .flatBlue tbody tr:hover td {
            background-color: rgb(177, 101, 138);
            
        }
        .t{
          margin-bottom: 0px; 
	font-size: large; 
	
	height: 27px;
  
        }
    </style>
    <link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" />
    <link rel="stylesheet" type="text/css" href="resume.css" />

<form class="form" action="Pass.php" method="post">
            <div>
            <br></br>
					<label class="t" for="mail">E-Mail:</label>
          <br></br>
					<input class="t" type="email" id="mail" name="email" required>
				
            </div>
            <br></br>
            <div> 
            </center>
                <center>
                <button class="testbutton" type="submit">Submit</button>
                <br></br>
              </center>
                
        </form>
        
          <form class="" action="adminConf.php">
          
            <button class = "testbutton" type="submit">
              
              Back to Admin page 
              
            </button>
          </div>  