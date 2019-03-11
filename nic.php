<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<!DOCTYPE html>
<html lang="en">
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
    	<link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/loading-bar.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script type="text/javascript" src="js/loading-bar.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/plan_scripts.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        
	    <title>Bits2Bytes 2018</title>
	</head>
    
    <body style="background: black">
        <nav class="navbar navbar-inverse navbar-fixed-top myheader" id="header" style="background: transparent; color: white; border: none; border-top: solid 3px rgba(0,112,202,1); transition: all 0.7s ease; margin: 0;">
            <div class="container-fluid" style="padding: 0 1% 0 0;">
              <div class="navbar-header" style="margin-left: -60px; padding: 0 50px 0 50px; border: solid 3px rgba(0,112,202,1); border-top: none; border-left: none; transform: skewX(-45deg); background: black">
                <a class="navbar-brand page-scroll" id="ttl" onclick="main()" href="index.php">Bits2Bytes 2018</a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="transform: skew(45deg); background: transparent; border-color: white">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
              </div>

              <div class="collapse navbar-collapse" id="myNavbar" style="padding: 0;">
                <ul class="nav navbar-nav navbar-right" style="padding-top: 0; margin: 0;">
                  <li class="menu_col" id="about"><a href="index.php">About</a></li>
                  <li class="menu_col" id="spons"><a href="index.php">Sponsors</a></li>
                  <li class="menu_col" id="contact"><a href="index.php">Contact</a></li>

                  <?php
                    if(empty($_SESSION))
                    {
                  ?>
                  <li class="menu_col" id="login"><a href="index.php" id="login_a">Login</a></li>
                  <?php
                    }
                    else
                    {
                  ?>
                  <li class="menu_col" id="login"><a href="index.php" id="login_a">Profile</a></li>
                  <?php
                    }
                  ?>
                </ul>
              </div>
            </div>
        </nav>
        
        <div class="container" style="margin-top: 75px;">
            <div class="row">
                <h1 style="font-size:2.3em; color: white; font-family: orbitron; margin: 30px auto; padding-bottom: 10px; border-bottom: solid 3px white">Title Sponsor - National Insurance Company Limited</h1>
                <img src="img/spons/0.png" style="margin: 10px auto 30px auto; border: solid 1px white">
                <p style="color: white; font-size: 1.3em; font-family: Orbitron; text-align: justify">NIC (National Insurance Company Ltd.) is India’s oldest general insurance Company. It was incorporated in Kolkata on 5th December, 1906 to fulfil the nationalist aspiration for Swaraj. 66 years later, after nationalisation it was merged along with 21 foreign and 11 Indian companies to form National Insurance Company Ltd, one of the 4 subsidiaries of the Govt. owned General Insurance Corporation of India.<br><br>

                The only PSGIC with Headquarters in Kolkata, National Insurance has several Firsts to its credit – it was the first to introduce Product customisation both Corporate and rural - an extension of which is the specialised Techno Marketing Project Cells for insuring mega projects and the Farmers Package Policy to suit the agrarian customer. It was also the first Indian insurance Company to enter into Strategic Alliances with the country’s largest Automobile manufacturer M/s Maruti and Two Wheeler major M/s. Hero Moto Corp and many others. These Tie ups ushered in a paradigm shift in Service Delivery method for Motor insurance. NIC also pioneered Bancassurance in India, by forging tie-ups with the country’s largest Banks.<br><br>

                With a work force of 14902 skilled personnel and 1998 offices all over India including operations in Nepal, National Insurance stands tall today as India’s 2nd largest non life insureras measured by its gross direct written premiums (GDWP). Motor insurance is the market's largest segment, and National had the largest market share in motor business among India's insurers in terms of GDWP in FY 15.Leader in 2 zones ie North and East, NIC recorded a premium of Rs 11282.64 crore in FY 15 recording its highest PBT of Rs 1196.74 crore as against 1007.82 crore in the previous year. Investment Income increased to Rs 2654 crs from the earlier 2263 crs. NIC contributed a handsome Dividend of Rs 165 crs to the National Exchequer in 2013 -14, the Dividend for FY 15 is Rs 194 crs.<br><br>

                National Insurance enjoys A.M. Best financial strength rating of B++ (Good) and issuer credit rating of "bbb+". The ratings reflect the Company’s strong risk adjusted capitalization, consistent investment performance and strong presence in India's insurance market.</p><br><br>
                
                <h3 style="color: white; font-size: 2.5em; font-family: Orbitron; text-align: justify; padding-bottom: 10px;">Contact Us - </h3>
                <p style="color: white; font-size: 1.3em; font-family: Orbitron; text-align: justify">Address: 3, Middleton Street, Prafulla Chandra Sen Sarani , Kolkata, West Bengal, 700071.</p>
                <p style="color: white; font-size: 1.3em; font-family: Orbitron; text-align: justify">Telephone: 22831705</p>
                <p style="color: white; font-size: 1.3em; font-family: Orbitron; text-align: justify">Fax: 22831740</p>
                <p style="color: white; font-size: 1.3em; font-family: Orbitron; text-align: justify">Website: <a style="text-decoration: none; color: #aaa" target="_blank" href="https://nationalinsuranceindia.nic.co.in/portal/page/portal/Corporate/Home">https://nationalinsuranceindia.nic.co.in/portal/page/portal/Corporate/Home</a></p><br><br>
            </div>
        </div>
    </body>
</html>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->