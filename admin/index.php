<!--Developed by SAHIL G. KALYANI-->

<?php

if(isset($_POST['login']))
{
    function validateFormData($formdata)
	{
		$formdata = trim(stripcslashes(htmlspecialchars($formdata)));
		return $formdata;
	}

    //Create variables and validate the data
    $formEmail = validateFormData($_POST['email']);
    $formPass = validateFormData($_POST['password']);
    
    //Super Admins (TS, ATS and Website Developers)
    if($formEmail==='sahil.kalyani75@gmail.com' && $formPass==='admin@sahil')
    {
        $query = "SELECT * FROM users WHERE `year`!='3'";
        $w = "Bits2Bytes 2018 - All Participants";
        $log = 1;
    }
    else if($formEmail==='guptashubham8100@gmail.com' && $formPass==='admin@shubham')
    {
        $query = "SELECT * FROM users";
        $w = "Bits2Bytes 2018 - All Participants";
        $log = 1;
    }
    else if($formEmail==='suvroitghoshdbz@gmail.com' && $formPass==='admin@suvrojit')
    {
        $query = "SELECT * FROM users";
        $w = "Bits2Bytes 2018 - All Participants";
        $log = 1;
    }
    else if($formEmail==='rishab19aug@gmail.com' && $formPass==='admin@rishab')
    {
        $query = "SELECT * FROM users";
        $w = "Bits2Bytes 2018 - All Participants";
        $log = 1;
    }
    else if($formEmail==='bodhidipramukherjee@gmail.com' && $formPass==='admin@deep')
    {
        $query = "SELECT * FROM users";
        $w = "Bits2Bytes 2018 - All Participants";
        $log = 1;
    }
    
    //Single Event Admins (Event Head Coordinators)
    else if($formEmail==='ishitadasgupta357@gmail.com' && $formPass==='bioquiz')
    {
        $query = "SELECT * FROM users WHERE `biogeek`='1'";
        $w = "Bits2Bytes 2018 - BioGeek-O-Quotient";
        $log = 1;
    }
    else if($formEmail==='souviks722@gmail.com' && $formPass==='souvik3597')
    {
        $query = "SELECT * FROM users WHERE `biotech`='1'";
        $w = "Bits2Bytes 2018 -Bio Techcellence ";
        $log = 1;
    }
    else if($formEmail==='megha.mg123@gmail.com' && $formPass==='megha123')
    {
        $query = "SELECT * FROM users WHERE `poster`='1'";
        $w = "Bits2Bytes 2018 - Scientific Poster Presentation";
        $log = 1;
    }
    else if($formEmail==='banerjeeepshita@gmail.com' && $formPass==='circuit123')
    {
        $query = "SELECT * FROM users WHERE `electrobox`='1'";
        $w = "Bits2Bytes 2018 - Electrobox";
        $log = 1;
    }
    else if($formEmail==='subhaghosh2404@gmail.com' && $formPass==='titan99')
    {
        $query = "SELECT * FROM users WHERE `ardor`='1'";
        $w = "Bits2Bytes 2018 - Code Ardor";
        $log = 1;
    }
    else if($formEmail==='shubhajitchatterjee1997@gmail.com' && $formPass==='phpdeveloper')
    {
        $query = "SELECT * FROM users WHERE `design`='1'";
        $w = "Bits2Bytes 2018 - Designophy";
        $log = 1;
    }
    else if($formEmail==='swapnil.sharma2709@gmail.com' && $formPass==='admin@b2b')
    {
        $query = "SELECT * FROM users WHERE `imitation`='1'";
        $w = "Bits2Bytes 2018 - The Imitation Game";
        $log = 1;
    }
    else if($formEmail==='sohambhatt96@gmail.com' && $formPass==='resolution1996')
    {
        $query = "SELECT * FROM users WHERE `resolution`='1'";
        $w = "Bits2Bytes 2018 - Resolution";
        $log = 1;
    }
    else if($formEmail==='ghoshkaushik1997@gmail.com' && $formPass==='b2b@ls')
    {
        $query = "SELECT * FROM users WHERE `lens`='1'";
        $w = "Bits2Bytes 2018 - Len-S-urge";
        $log = 1;
    }
    else if($formEmail==='shalinipathak13@gmail.com' && $formPass==='panda')
    {
        $query = "SELECT * FROM users WHERE `envision`='1'";
        $w = "Bits2Bytes 2018 - Envision";
        $log = 1;
    }
    else if($formEmail==='24anuragtiwari@gmail.com' && $formPass==='ben10')
    {
        $query = "SELECT * FROM users WHERE `electrono`='1'";
        $w = "Bits2Bytes 2018 - Electronovation";
        $log = 1;
    }
    else if($formEmail==='palsohan194@gmail.com' && $formPass==='cs_tango')
    {
        $query = "SELECT * FROM users WHERE `cs`='1'";
        $w = "Bits2Bytes 2018 - CS 1.6";
        $log = 1;
    }
    else if($formEmail==='senguptaarkajit@gmail.com' && $formPass==='lm10')
    {
        $query = "SELECT * FROM users WHERE `fifa`='1'";
        $w = "Bits2Bytes 2018 - FIFA 11";
        $log = 1;
    }
    else if($formEmail==='atanupaul3256@gmail.com' && $formPass==='paulspidy')
    {
        $query = "SELECT * FROM users WHERE `nfs`='1'";
        $w = "Bits2Bytes 2018 - NFS Most Wanted";
        $log = 1;
    }
    else if($formEmail==='basak.jazz66@gmail.com' && $formPass==='walle')
    {
        $query = "SELECT * FROM users WHERE `autotrix`='1'";
        $w = "Bits2Bytes 2018 - AutoTrix";
        $log = 1;
    }
    else if($formEmail==='biswasmita97@gmail.com' && $formPass==='dgart123')
    {
        $query = "SELECT * FROM users WHERE `pixelate`='1'";
        $w = "Bits2Bytes 2018 - Pixelate";
        $log = 1;
    }
    else if($formEmail==='sahitya.tripti@gmail.com' && $formPass==='adios1234')
    {
        $query = "SELECT * FROM users WHERE `tracktrix`='1'";
        $w = "Bits2Bytes 2018 - TrackTrix";
        $log = 1;
    }
    else if($formEmail==='aditikgp2013' && $formPass==='aditi007')
    {
        $query = "SELECT * FROM users WHERE `maze`='1'";
        $w = "Bits2Bytes 2018 - Maze-O-Craze";
        $log = 1;
    }
    else if($formEmail==='ganiruddha0@gmail.com' && $formPass==='aast2018')
    {
        $query = "SELECT * FROM users WHERE `carrom`='1'";
        $w = "Bits2Bytes 2018 - Robo Carrom";
        $log = 1;
    }
    else if($formEmail==='sanubothra@gmail.com' && $formPass==='sanu123')
    {
        $query = "SELECT * FROM users WHERE `soccer`='1'";
        $w = "Bits2Bytes 2018 - Robo Soccer";
        $log = 1;
    }
    else if($formEmail==='suprabhaghosh5@gmail.com' && $formPass==='optimus18')
    {
        $query = "SELECT * FROM users WHERE `combat`='1'";
        $w = "Bits2Bytes 2018 - Clash-O-Combat";
        $log = 1;
    }
    else if($formEmail==='stutipanchadhyayee.sp@gmail.com' && $formPass==='ankuashu')
    {
        $query = "SELECT * FROM users WHERE `advermania`='1'";
        $w = "Bits2Bytes 2018 - Advermania";
        $log = 1;
    }
    else if($formEmail==='sreyasi101996@gmail.com' && $formPass==='sreyasi18')
    {
        $query = "SELECT * FROM users WHERE `satyanweshi`='1'";
        $w = "Bits2Bytes 2018 - Satyanweshi";
        $log = 1;
    }
    else if($formEmail==='vishwangdave@gmail.com' && $formPass==='alohamora')
    {
        $query = "SELECT * FROM users WHERE `utopia`='1'";
        $w = "Bits2Bytes 2018 - Utopia";
        $log = 1;
    }
    else if($formEmail==='arupm45@gmail.com' && $formPass==='kumar12345')
    {
        $query = "SELECT * FROM users WHERE `aerostorm`='1'";
        $w = "Bits2Bytes 2018 - Aero Storm";
        $log = 1;
    }
    else if($formEmail==='kousikmandal10@gmail.com' && $formPass==='kousik@50')
    {
        $query = "SELECT * FROM users WHERE `quad`='1'";
        $w = "Bits2Bytes 2018 - Quad-X";
        $log = 1;
    }
    else if($formEmail==='swatijha.2496@gmail.com' && $formPass==='admin@swati')
    {
        $query = "SELECT * FROM users WHERE `jam`='1'";
        $w = "Bits2Bytes 2018 - Just A Minute";
        $log = 1;
    }
    else if($formEmail==='bhushanbhaskar628@gmail.com' && $formPass==='bhushan123')
    {
        $query = "SELECT * FROM users WHERE `maths`='1'";
        $w = "Bits2Bytes 2018 - Maths-Pi-Rates";
        $log = 1;
    }
    else if($formEmail==='avirupnanda@gmail.com' && $formPass==='techfest123')
    {
        $query = "SELECT * FROM users WHERE `exposure`='1'";
        $w = "Bits2Bytes 2018 - Exposure";
        $log = 1;
    }
    
    if($log==1)
    {
        /*FOR WAMP SERVER
        $server     = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "my_first_database";*/

        $conn = mysqli_connect($server, $username, $password, $db);
        
        $result = mysqli_query($conn, $query);

        //Starting the session
        session_start();
        $_SESSION['database']="";
        $i=1;
        $_SESSION['database'] = $_SESSION['database']."<h1 style='margin: 10px auto'>".$w."</h1><br>";
        
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION['database'] = $_SESSION['database']."<table class='table table-bordered'><tr><th>Id</th><th>Full Name</th><th>Email Id</th><th>Phone Number</th><th>Year</th><th>College</th></tr>";
            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['database'] = $_SESSION['database']."<tr><td>". $i++ ."</td><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["mobile"] ."</td><td>". $row["year"] ."</td><td>". $row["college"] ."</td></tr>";
            }
            $_SESSION['database'] = $_SESSION['database']."</table>";
            
            header("Location: database.php");
        }

        else
        {
            $message = "Oops! No results";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        mysqli_close($conn);
    }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Official Website of Bits2Bytes 2018">
    <meta name="author" content="Shubham Gupta and Sahil Kalyani">

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    
    <title>Bits2Bytes 2018</title>
  </head>

  <body style="background: #1f222b; color: #FE524C; position: relative;">
     <style>
        a
        {
            text-decoration: none;
            color: white;
        }
        #ttl
        {
            font-size: 2.5em;
            color: white;
            text-align: center;
            text-decoration: none;
            font-family: 'Black Ops One', cursive;
            font-weight: normal;
            cursor: pointer;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button,
        input[type=date]::-webkit-inner-spin-button, 
        input[type=date]::-webkit-outer-spin-button
        { 
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=text],input[type=number],input[type=email], #register-year, #register-stream, #register-newbie
        { 
            padding: 10px 17px;
            font-size: 1.2em;
        }
        .form-group
        {
            margin: 20px 0;
        }

        @media(max-width: 500px)
        {
            #ttl
            {
                font-size: 1.5em;
            }

            #bt1, #bt1:hover, #bt1:active
            {
                margin-right: 10px;
            }

            .navbar-header img
            {
                height: 40px !important;
                margin-top: 4px !important;
                margin-right: 0 !important;
            }
        }
     </style>
    
     <div class="container" style="margin-top:17vh; min-height:75%">
        <div class="row" style="margin-bottom: 90px">
            <div class="col-md-4 col-sm-1"></div>
            <div class="col-md-4 col-sm-10" style="padding: 10px; max-width: 90%; margin: auto; border: solid 1px ; border-radius: 10px; background: #FE524C;">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" style="margin: 20px;">
                    <h4 style="color: white; font-size: 2.2em; margin-bottom: 20px; padding-bottom: 20px; border-bottom: solid 2px white; text-align: center">Admin Login</h4>
                    <div class="form-group">
                        <input type="email" class="form-control" id="register-email" name="email" placeholder="Email Id" style="color: black">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="color: black">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="login" class="btn" style="color: #FE524C; background-color: #fff; font-weight: bold">Login</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
  </body>
</html>

<!--Developed by SAHIL G. KALYANI-->