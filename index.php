<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
    session_start();
    include "dbconnect.php";
    if(empty($_SESSION)) //Checking if session variable exists or not
    {
        echo "<script>var session = 0;</script>";
    }
    else
    {
        echo "<script>document.getElementById('login_a').innerHTML='PROFILE';</script>";
        echo "<script>document.getElementById('login_title').innerHTML='PROFILE';</script>";
    }
?>
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
        
        <style>
            canvas
            {
               position: absolute;
               top: 0;
               left: 0;
            }
            
            #data
            {
                transition-property: opacity, margin;
                transition-duration: .8s;
                transition-timing-function: ease-in-out;
                transition-delay: .7s;
                position: fixed;
                top: inherit;
                bottom: 0;
                left: 0;
                width: 100%;
                text-align: center;
                background: black;
            }
            
            #data a
            {
                display: inline-block;
                text-align: center;
                font-size: 20px;
                padding: 10px 15px;
                color: white;
                text-shadow: black;
                font-weight: normal !important;
                font-family: 'Open Sans', sans-serif !important;
                text-decoration: none;
                cursor: pointer;
            }
            
            #data a.active
            {
                color: #0CF;
            }
            
            #data a
            {
                font-family: 'Orbitron',sans-serif !important;
            }
            
            #data a:hover
            {
                background: rgba(66,203,248,0.5);
            }
            
            #loader h3,h4
            {
                font-family: 'Dosis', sans-serif;
                font-weight: 100;
            }
            
            #circle
            {
                border-radius: 50%;
            }
            
            #circle_img
            {
                -webkit-animation: zoom linear infinite 2s;
                -moz-animation: zoom linear infinite 2s;
                -o-animation: zoom linear infinite 2s;
                animation: zoom linear infinite 2s;
            }
            @keyframes zoom
            {
                0%
                {
                  transform: scale(0.6);
                }

                25%
                {
                  transform: scale(0.8);
                }

                50%
                {
                  transform: scale(1);
                }

                75%
                {
                  transform: scale(0.8);
                }

                100%
                {
                  transform: scale(0.6);
                }
            }
            @media(max-width:992px)
            {
                #space
                {
                    width: 87% !important;
                    padding-top: 13em;
                }
                #circle
                {
                    padding: 0;
                }
            }
            @media(max-width:768px)
            {
                #space2
                {
                    padding-top: 16% !important;
                }
                #pre_text
                {
                    font-size: 1.5em !important;
                }
            }
        </style>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
	    <title>Bits2Bytes 2018</title>
	</head>

	<body onload="typeWriter()" style="overflow: hidden">
		<audio autoplay="" loop="" src="music/audio.mp3" id="audio"></audio>
		
        <div id="loader" class="container-fluid" style="text-align: center; padding-top: 2%;">
			<div class="row" id="space2" style="padding-top: 0%;">
                <div class="col-md-4 col-sm-4 col-xs-2"></div>
                <div class="col-md-4 col-sm-4 col-xs-8">
                  <div id="circle" style="padding: 10%">
                    <img src="img/logo.png" width="100%" style="background-radius: 100px" id="circle_img">
                  </div>
                </div>
            </div>
            
            <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;">
                <h1 class="text" style="padding: 20px 3%; margin: 0; font-size: 2em">BITS 2 BYTES &nbsp;2018</h1>
                
                <div id="space" class="container" style="padding-top: 20em;">
                    <h3 id="pre_text" style="color: white; font-size: 2em; margin: 0; padding: 0; text-align: justify;"></h3>
                    
                    <script>
                        var i = 0;
                        var txt = 'Bengal Institute of Technology takes you through an epic journey to a distant Galaxy "Kosmos". Kosmos is home to a million planetary systems, responsible for technological innovations beyond human imagination. One of the prime planetary systems of this galaxy is "Bits2Bytes". This is an expedition to that wonderous place. Let\'s dive in...';
                        var speed = 7;

                        function typeWriter() {
                          if (i < txt.length) {
                            document.getElementById("pre_text").innerHTML += txt.charAt(i);
                            i++;
                            setTimeout(typeWriter, speed);
                          }
                          else
                          {
                              document.getElementById("skip").innerHTML = "Enter >>>";
                          }
                          if(i==7)
                          {
                              loader_button();
                          }
                        }
                    </script>
                </div>
                    
                <button id="enter" onclick="hideloader()" style="visibility: hidden; position: absolute; right: 50px; bottom: 50px; background: transparent; color: white; border: none; padding-right: 50px">
                    <h2 id="skip" class="text" style="font-weight: normal; outline: none !important;">Skip >>></h2>
                </button>
            </div>
		</div>
        
        <div id="rest" style="visibility: hidden; display: none; transition: all 1s ease; overflow-x: hidden;">
            <nav class="navbar navbar-inverse navbar-fixed-top myheader" id="header" style="background: transparent; color: white; border: none; border-top: solid 3px rgba(0,112,202,1); transition: all 0.7s ease; margin: 0;">
                <div class="container-fluid" style="padding: 0 1% 0 0;">
                  <div class="navbar-header" style="margin-left: -60px; padding: 0 50px 0 50px; border: solid 3px rgba(0,112,202,1); border-top: none; border-left: none; transform: skewX(-45deg); background: black">
                    <a class="navbar-brand page-scroll" id="ttl" onclick="main()" href="#">Bits2Bytes 2018</a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="transform: skew(45deg); background: transparent; border-color: white">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                  </div>
                  
                  <div class="collapse navbar-collapse" id="myNavbar" style="padding: 0;">
                    <ul class="nav navbar-nav navbar-right" style="padding-top: 0; margin: 0;">
                      <li class="menu_col" id="about"><a onclick="fun1('About','about')">About</a></li>
                      <li class="menu_col" id="spons"><a onclick="fun1('Sponsors','spons')">Sponsors</a></li>
                      <li class="menu_col" id="contact"><a onclick="fun1('Contact','contact')">Contact</a></li>
                      
                      <?php
                        if(empty($_SESSION))
                        {
                      ?>
                      <li class="menu_col" id="login"><a onclick="fun1('Login','login')" id="login_a">Login</a></li>
                      <?php
                        }
                        else
                        {
                      ?>
                      <li class="menu_col" id="login"><a onclick="fun1('Login','login')" id="login_a">Profile</a></li>
                      <?php
                        }
                      ?>
                    </ul>
                  </div>
                </div>
            </nav>
            
            <embed id="main_screen" src="solar/index.html" style="width: 100%; height:100vh; border: none; margin: 0;"/>
            
            <div class="section" id="planet1" style="display: none">
                <form class="container-fluid" id="lumin">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Envision')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Envision</h2>
                            <img src="img/icon/Envision.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="envision" id="envision" value="1"> Register</p>
                         </div>
                      </div>
                        
                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Electronovation')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Electronovation</h2>
                            <img src="img/icon/Electronovation.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="electrono" id="electrono" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Bio-Techcellence')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Bio-Techcellence</h2>
                            <img src="img/icon/Bio-Techcellence.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="biotech" id="biotech" value="1"> Register</p>
                         </div>
                      </div>
                        
                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Scientific Poster Presentation')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Scientific Poster Presentation</h2>
                            <img src="img/icon/Scientific Poster Presentation.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="poster" id="poster" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet2">
                <form class="container-fluid" id="sphinxite">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('BioGeek-O-Quotient')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">BioGeek-O-Quotient</h2>
                            <img src="img/icon/BioGeek-O-Quotient.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="biogeek" id="biogeek" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Maths-Pi-Rates')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Maths-π-Rates</h2>
                            <img src="img/icon/Maths-π-Rates.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="maths" id="maths" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Electrobox')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Electrobox</h2>
                            <img src="img/icon/Electrobox.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="electrobox" id="electrobox" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Utopia')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Utopia</h2>
                            <img src="img/icon/Utopia.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="utopia" id="utopia" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet3">
                <form class="container-fluid" id="cybertron">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-md-2 col-sm-6">
                         <div class="crd" onclick="fun7('AutoTrix')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">AutoTrix</h2>
                            <img src="img/icon/AutoTrix.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="autotrix" id="autotrix" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-2 col-sm-6">
                         <div class="crd" onclick="fun7('TrackTrix')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">TrackTrix</h2>
                            <img src="img/icon/TrackTrix.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="tracktrix" id="tracktrix" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-2 col-sm-6">
                         <div class="crd" onclick="fun7('Clash-O-Combat')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Clash-O-Combat</h2>
                            <img src="img/icon/Clash-O-Combat.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="combat" id="combat" value="1"> Register</p>
                         </div>
                      </div>
                      
                      <div class="col-md-2 col-sm-6">
                         <div class="crd" onclick="fun7('Robo Carrom')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Robo Carrom</h2>
                            <img src="img/icon/Robo Carrom.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="carrom" id="carrom" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-2 col-sm-6">
                         <div class="crd" onclick="fun7('Robo Soccer')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Robo Soccer</h2>
                            <img src="img/icon/Robo Soccer.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="soccer" id="soccer" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-2 col-sm-6">
                         <div class="crd" onclick="fun7('Maze-O-Craze')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Maze-O-Craze</h2>
                            <img src="img/icon/Maze-O-Craze.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="maze" id="maze" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet4">
                <form class="container" id="arcadia">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('FIFA 11')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">FIFA 11</h2>
                            <img src="img/icon/FIFA 11.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="fifa" id="fifa" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('NFS Most Wanted')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">NFS Most Wanted</h2>
                            <img src="img/icon/NFS Most Wanted.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="nfs" id="nfs" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('Counter Strike')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Counter Strike</h2>
                            <img src="img/icon/Counter Strike.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="cs" id="cs" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet5">
                <form class="container-fluid" id="ethos">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Resolution')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Resolution</h2>
                            <img src="img/icon/Resolution.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="resolution" id="resolution" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Just A Minute')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Just A Minute</h2>
                            <img src="img/icon/Just A Minute.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="jam" id="jam" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Advermania')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Advermania</h2>
                            <img src="img/icon/Advermania.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="advermania" id="advermania" value="1"> Register</p>
                         </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6">
                         <div class="crd" onclick="fun7('Satyanweshi')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Satyanweshi</h2>
                            <img src="img/icon/Satyanweshi.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="satyanweshi" id="satyanweshi" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet6">
                <form class="container" id="crypton">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('CodeArdor')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">CodeArdor</h2>
                            <img src="img/icon/CodeArdor.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="ardor" id="ardor" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('Designophy')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Designophy</h2>
                            <img src="img/icon/Designophy.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="design" id="design" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('The Imitation Game')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">The Imitation Game</h2>
                            <img src="img/icon/The Imitation Game.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="imitation" id="imitation" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet7">
                <form class="container" id="imago">
                    <div class="row" style="margin: 8% auto 40px">
                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('Exposure')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Exposure</h2>
                            <img src="img/icon/Exposure.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="exposure" id="exposure" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('Len-S-urge')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Len-S-urge</h2>
                            <img src="img/icon/Len-S-urge.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="lens" id="lens" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-4">
                         <div class="crd" onclick="fun7('Pixelate')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Pixelate</h2>
                            <img src="img/icon/Pixelate.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="pixelate" id="pixelate" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div class="section" id="planet8">
                <form class="container-fluid" id="orvillon">
                    <div class="row" style="margin: 7% auto 40px">
                      <div class="col-sm-3 col-md-offset-3">
                         <div class="crd" onclick="fun7('Quad-X')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Quad-X</h2>
                            <img src="img/icon/Quad-X.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="quad" id="quad" value="1"> Register</p>
                         </div>
                      </div>

                      <div class="col-sm-3">
                         <div class="crd" onclick="fun7('Aerostorm')" style="background: transparent; border:none">
                            <h2 style="font-size: 1.7em; text-shadow: 2px 2px 2px #111;">Aerostorm</h2>
                            <img src="img/icon/Aerostorm.gif" style="width: 80%; margin: 20px auto; border-radius: 100%;">
                            <p style="text-align: center; transform: scale(1.7); text-shadow: 1px 1px 5px #111;"><input type="checkbox" name="aerostorm" id="aerostorm" value="1"> Register</p>
                         </div>
                      </div>
                    </div>
                    
                    <button class="btn event_submit" type="submit" style="background: black; color: #42cbf8; border: solid 2px #42cbf8">SUBMIT</button>
                </form>
            </div>
            
            <div id="data">
                <a class="sun" onclick="fun2('Technos')">Technos</a>
                <a class="mercury" onclick="fun2('Lumin')">Lumin</a>
                <a class="venus" onclick="fun2('Sphinxite')">Sphinxite</a>
                <a class="earth" onclick="fun2('Cybertron')">Cybertron</a>
                <a class="mars" onclick="fun2('Arcadia')">Arcadia</a>
                <a class="jupiter" onclick="fun2('Ethos')">Ethos</a>
                <a class="saturn" onclick="fun2('Crypton')">Crypton</a>
                <a class="uranus" onclick="fun2('Imago')">Imago</a>
                <a class="neptune" onclick="fun2('Orvillon')">Orvillon</a>
            </div>
            
            <div id="mymodal_a" style="display:none; background: url('img/1.png') no-repeat; background-size: 100% 100%; border: none; overflow: hidden !important;">
                <a type="btn" onclick="closem()" style="cursor: pointer; text-decoration: none; position: absolute; top: 5px; right: 15px; color: white; margin: 0; padding: 0; font: bold 20px 'Orbitron',sans-serif; color: #42cbf8; text-shadow: 2px 2px 3px rgba(0,112,202,0.8), -2px -2px 3px rgba(0,112,202,0.8);">x</a>
                <div class="modal_header">
                    <h2 class="text" id="title" style="font-size: 2.7em; padding: 25px; margin: 0">ABOUT</h2>
                </div>
                <div class="modal_body" id="planet_modalbody" style="height: 70%; overflow-Y:scroll">
                    <p style="margin: 10px 40px 20px 50px; color: white; font-size: 1.5em; text-align: justify">Bengal Institute of Technology, Techno India Group is privileged to present before you one of the oldest technical festival in Kolkata, Bits2Bytes. Our tech fest has been engraving its name as one of the most participated and successful technical fiesta since a long time. Bits2Bytes is one of the most exquisite and highly appreciated technical festivals in Kolkata. Every year we bring forth an amalgamation of both technical and non-technical events which are both rare and innovative in nature. Every coming year is seeing the development of our technical fiesta and each year it is emerging out with huge success, with large number of participating colleges from different parts of the city. Our Tech Fest has been engraving its name as one of the most participated and successful technical fiesta since a long time. We come up with endearing, innovative and enriching events, both technical and non-technical events every year which students from all over Kolkata participate and attend.</p><br>
                    
                    <iframe src="https://www.youtube.com/embed/WUqCNLAPsVY" style="width: 57%; height: 30vw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="modal_footer" style="text-align: center">
                    <h2 style="padding: 10px 0; margin: 0;"><a href="privacypolicy.htm" target="_blank" style="text-decoration: none; font: normal 0.9em 'Orbitron',sans-serif; color: white; letter-spacing: 1px; cursor: pointer" onmouseover="this.style.color='#42cbf8'" onmouseout="this.style.color='white'">PRIVACY POLICY</a></h2>
                </div>
            </div>
            
            <div id="mymodal_s" style="display:none; background: url('img/1.png') no-repeat; background-size: 100% 100%; border: none; overflow: hidden !important;">
                <a type="btn" onclick="closem()" style="cursor: pointer; text-decoration: none; position: absolute; top: 5px; right: 15px; color: white; margin: 0; padding: 0; font: bold 20px 'Orbitron',sans-serif; color: #42cbf8; text-shadow: 2px 2px 3px rgba(0,112,202,0.8), -2px -2px 3px rgba(0,112,202,0.8);">x</a>
                <div class="modal_header">
                    <h2 class="text" style="font-size: 2.7em; padding: 25px; margin: 0">SPONSORS</h2>
                </div>
                <div class="modal_body container-fluid" id="planet_modalbody" style="height: 70%; overflow-Y:scroll; overflow-X: hidden;">
                    <!--<div class="row" style="margin: 0 10%">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="img/spons/1.png" style="width: 100%">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="img/spons/2.png"style="width: 100%">
                        </div>
                    </div>-->
                    <div class="row" style="margin: 0 10%">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/1.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/0.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/2.png" style="width: 100%">
                        </div>
                    </div><br>
                    <div class="row" style="margin: 0 10%">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/3.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/tga_logo.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/5.png" style="width: 100%">
                        </div>
                    </div><br>
                    <div class="row" style="margin: 0 10%">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/Geek_logi_-low_res.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/hotpot.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/festPav Logo_HD.png" style="width: 100%">
                        </div>
                    </div><br>
                    <div class="row" style="margin: 0 10%">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/944956_554020988107952_4474418243113926351_n.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/10.png" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/Fotor_150374872887627 (1).jpg" style="width: 100%">
                        </div>
                    </div>
                    <div class="row" style="margin: 0 10%">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/11258906_369214003284702_7256904365127368485_n.jpg" style="width: 100%">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <img src="img/spons/white logo with background.PNG" style="width: 100%">
                        </div>
                    </div><br>
                </div>
            </div>
            
            <div id="mymodal_c" style="display:none; background: url('img/1.png') no-repeat; background-size: 100% 100%; border: none; overflow: hidden !important;">
                <a type="btn" onclick="closem()" style="cursor: pointer; text-decoration: none; position: absolute; top: 5px; right: 15px; color: white; margin: 0; padding: 0; font: bold 20px 'Orbitron',sans-serif; color: #42cbf8; text-shadow: 2px 2px 3px rgba(0,112,202,0.8), -2px -2px 3px rgba(0,112,202,0.8);">x</a>
                <div class="modal_header">
                    <h2 class="text" id="title" style="font-size: 2.7em; padding: 25px; margin: 0">CONTACT</h2>
                </div>
                <div class="modal_body container" id="planet_modalbody" style="width: 85%; height: 80%; overflow-Y:auto">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 crd" style="text-align: center; margin: 0">
                        <h2 style="font-size: 1.5em; margin-bottom: 10px">Technical Secretary</h2>
                        <img src="img/cont/1.png" style="width:80%; border-radius:100%">
                        <h2 style="font-size: 1.5em">Sahil Kalyani</h2>
                        <h2 style="font-size: 1.3em">8902257840</h2>
                      </div>

                      <div class="col-md-3 col-sm-6 crd" style="text-align: center; margin: 0">
                        <h2 style="font-size: 1.5em; margin-bottom: 10px">A. Technical Secretary</h2>
                        <img src="img/cont/2.png" style="width:80%; border-radius:100%">
                        <h2 style="font-size: 1.5em">Suvrojit Ghosh</h2>
                        <h2 style="font-size: 1.3em">9038724099</h2>
                      </div>

                      <div class="col-md-3 col-sm-6 crd" style="text-align: center; margin: 0">
                        <h2 style="font-size: 1.5em; margin-bottom: 10px">A. Technical Secretary</h2>
                        <img src="img/cont/3.png" style="width:80%; border-radius:100%">
                        <h2 style="font-size: 1.5em">Rishab Mukherjee</h2>
                        <h2 style="font-size: 1.3em">8240068386</h2>
                      </div>

                      <div class="col-md-3 col-sm-6 crd" style="text-align: center; margin: 0">
                        <h2 style="font-size: 1.5em; margin-bottom: 10px">A. Technical Secretary</h2>
                        <img src="img/cont/4.png" style="width:80%; border-radius:100%">
                        <h2 style="font-size: 1.5em">Bodhidipra Mukherjee</h2>
                        <h2 style="font-size: 1.3em">9874863893</h2>
                      </div>
                    </div><br>
                    
                    <div class="row" style="height: 80%; margin-top: 10px; margin-bottom: 10px;">
                      <div class="col-md-6 crd" style="text-align: center">
                        <h2 style="font-size: 1.7em; margin-bottom: 10px">Web Dev Team</h2>
                        <img src="img/cont/5.png" style="width: 90%;">
                        <h2 style="font-size: 1.5em">(From L-R) Shubham Gupta, Sahil Kalyani</h2>
                      </div>

                      <div class="col-md-6 crd" style="text-align: center">
                        <h2 style="font-size: 1.7em; margin-bottom: 10px">Design Cell</h2>
                        <img src="img/cont/6.png" style="width: 90%;">
                        <h2 style="font-size: 1.5em">(From L-R) Shubhajit Chaterjee, Trinava Sur</h2>
                      </div>
                    </div><br>
                    
                    <div class="row" style="height: 60%; margin-top: 10px; margin-bottom: 10px;">
                      <div class="col-sm-2 col-xs-1"></div>
                        
                      <div class="col-sm-8 col-xs-12 crd" style="text-align: center">
                        <h2 style="font-size: 1.7em; margin-bottom: 10px">Sponsorship and Public Relations</h2>
                        <img src="img/cont/7.png" style="width: 90%;">
                        <h2 style="font-size: 1.5em">(From L-R) Sayan Dutta, Ravi Mandalia, Anurag Tiwari, Swapnil Sharma, Vishwang Dave, Swarnakamal Samanta</h2>
                      </div>
                      
                      <div class="col-sm-2 col-xs-1"></div>
                    </div><br>
                    
                    <div class="row" style="margin: 2% 3% 2% 4%">
                        <div class="col-md-6">
                            <h3 style="text-align: left; color: white">Arpita Chakraborty</h3>
                            <h4 style="font-size: 1.5em; line-height: 0.9; text-align: left; color: white">[Assistant Professor, Dept. of ECE]</h4>
                            <h4 style="font-size: 1.5em; line-height: 0.9; text-align: left; color: white">Conveynor, Bits2Bytes 2018</h4>
                            <h4 style="font-size: 1.5em; line-height: 0.9; text-align: left; color: white">chakraborty_arpita2006@yahoo.com</h4><br><br>

                            <h3 style="text-align: left; color: white">Bengal Institute of Technology</h3>
                            <p style="text-align: left; color: white; font-size: 1.1em; margin: 5px 0">1 no. Govt. Colony (on Basanti Highway), Kolkata-700150, West Bengal, India</p>
                            <p style="text-align: left; color: white; font-size: 1.1em; margin: 5px 0">033-2345-8004</p><br>

                            <h3 style="text-align: left; color: white">Techno India Group</h3>
                            <p style="text-align: left; color: white; font-size: 1.1em; margin: 5px 0">EM-4/2, Sector-V, Salt Lake, Kolkata-700091, West Bengal, India</p>
                            <p style="text-align: left; color: white; font-size: 1.1em; margin: 5px 0">033-2357-5683</p>
                        </div>
                        <div class="col-md-6 map-container">
                          <a href="https://www.google.co.in/maps/place/Bengal+Institute+Of+Technology/@22.521596,88.4587336,17z/data=!4m8!1m2!2m1!1sbengal+institute+of+technology!3m4!1s0x3a0274a1c0115249:0x975599390971e184!8m2!3d22.521596!4d88.4609223" target="_blank">
                          </a>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.535725635243!2d88.45873361453518!3d22.521595985209075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0274a1c0115249%3A0x975599390971e184!2sBengal+Institute+Of+Technology!5e0!3m2!1sen!2sin!4v1518286498130" frameborder="0" style="border:0; width: 100%; height: 27vw" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="mymodal_p" style="display:none; background: url('img/1.png') no-repeat; background-size: 100% 100%; border: none; overflow: hidden !important;">
                <a type="btn" onclick="planets_closem()" style="cursor: pointer; text-decoration: none; position: absolute; top: 5px; right: 15px; color: white; margin: 0; padding: 0; font: bold 20px 'Orbitron',sans-serif; color: #42cbf8; text-shadow: 2px 2px 3px rgba(0,112,202,0.8), -2px -2px 3px rgba(0,112,202,0.8);">x</a>
                <div class="modal_header">
                    <h2 class="text" id="planet_title" style="font-size: 2.7em; padding: 25px; padding-bottom: 10px; margin: 0">TITLE</h2>
                </div>
                <div class="modal_body" id="planet_modalbody" style="height: 70%; overflow-Y:scroll">
                    <p style="margin: 15px 50px; color: white; font-size: 2.2em; text-align: justify; line-height: 1; font-weight: bold">Name and Etymology: <span id="p_name" style="font-size: 0.7em; font-weight: normal"></span></p>
                    
                    <p style="margin: 15px 50px; color: white; font-size: 2.2em; text-align: justify; line-height: 1; font-weight: bold">Type: <span id="p_type" style="font-size: 0.7em; font-weight: normal"></span></p>
                    
                    <p style="margin: 15px 50px; color: white; font-size: 2.2em; text-align: justify; line-height: 1; font-weight: bold">Characteristics: <span id="p_chars" style="font-size: 0.7em; font-weight: normal"></span></p>
                    
                    <p style="margin: 15px 50px; color: white; font-size: 2.2em; text-align: justify; line-height: 1; font-weight: bold">Inhabitants: <span id="p_inhab" style="font-size: 0.7em; font-weight: normal"></span></p>
                </div>
                <div class="modal_footer" style="text-align: center">
                    <button class="enter" id="explore" onclick="plan()" style="transform: scale(0.7); margin: 0px">
                        <hr style="width: 100%;	border: none; border-top: solid 1px #42cbf8; margin: 0 auto;">
                        <h2 style="padding: 10px 0; margin: 0;">EXPLORE</h2>
                        <hr style="width: 80%; border: none; border-bottom: solid 1px #42cbf8; margin: 0 auto;">
                    </button>
                </div>
            </div>
            
            <div id="mymodal_e" style="display:none; background: url('img/1.png') no-repeat; background-size: 100% 100%; border: none; overflow: hidden !important;">
            <a type="btn" onclick="closem_e()" style="cursor: pointer; text-decoration: none; position: absolute; top: 5px; right: 15px; color: white; margin: 0; padding: 0; font: bold 20px 'Orbitron',sans-serif; color: #42cbf8; text-shadow: 2px 2px 3px rgba(0,112,202,0.8), -2px -2px 3px rgba(0,112,202,0.8);">x</a>
                <div class="modal_header">
                    <h2 class="text" id="event_title" style="font-size: 2.7em; padding: 25px; margin: 0"></h2>
                </div>
                <div class="modal_body container" id="planet_modalbody" style="width: 85%; height: 70%; overflow-Y:auto">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="modal_poster" src="" style="width: 100%; padding-right: 2%">
                        </div>
                        <div class="col-md-6" style="padding: 2%; padding-right: 0">
                            <h2 style="text-align: left; color: white; text-shadow: none" class="text" id="modal_ruleslink">Rules and Regulations</h2><br>
                            <h2 style="text-align: left; color: white; text-shadow: none" class="text">Coordinators:</h2>
                            <ul id="modal_coord" style="text-align: left; padding-left: 20px; color: white; font-size: 1.5em"></ul><br>
                            <div id="modal_regconf"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="mymodal_l" style="display:none; background: url('img/1.png') no-repeat; background-size: 100% 100%; border: none; overflow: hidden !important;">
                <a type="btn" onclick="closem()" style="cursor: pointer; text-decoration: none; position: absolute; top: 1%; right: 1%; color: white; margin: 0; padding: 0; font: bold 20px 'Orbitron',sans-serif; color: #42cbf8; text-shadow: 2px 2px 3px rgba(0,112,202,0.8), -2px -2px 3px rgba(0,112,202,0.8);">x</a>
                
                <div class="modal_header">
                    <h2 id="login_title" class="text" style="font-size: 2.7em; padding: 25px; margin: 0">LOGIN</h2>
                </div>
                <div class="modal_body container-fluid" id="planet_modalbody" style="margin-top: 1%; width: 85%; height: 75%; overflow-Y:auto">
                    <?php
                        if(!isset($_SESSION["email"]))
                        {
                    ?>
                    <div id="logincontainer" class="row" style="margin-top:2%">
                        <div class="col-md-3 col-sm-2 col-xs-1"></div>
                        <form class="col-md-6 col-sm-8 col-xs-10" id="loginform" method="post">
                            <div class="display-error" style="display: none;"></div>
                            <input type="email" name="lemail" class="form-control" placeholder="Email Address" required style="padding: 13px;"><br>
                            <input type="password" name="lpassword" class="form-control" placeholder="Password" required style="padding: 13px">
                            
                            <button class="enter" type="submit" style="transform: scale(0.7); margin: 10px auto -30px auto;">
                                <hr style="width: 100%;	border: none; border-top: solid 1px #42cbf8; margin: 0 auto;">
                                <h2 style="padding: 10px 0; margin: 0;">LOGIN</h2>
                                <hr style="width: 80%; border: none; border-bottom: solid 1px #42cbf8; margin: 0 auto;">
                            </button>
                            
                            <h4 style="transform: scale(1.2); margin: 0; margin-bottom: 15px; color: #aaa" id="bottom">Don't have an account yet? <a href="#" id="signup" onclick="document.getElementById('login_title').innerHTML='REGISTER';">Register</a></h4>
                        </form>
                    </div>
                    <div id="signupcontainer" class="row">
                        <div class="col-md-3 col-sm-0"></div>
                        <form class="col-md-6 col-sm-12" id="registerform" method="post">
                            <div class="display-error" style="display: none;"></div>
                            <input type="text" name="rname" class="form-control" placeholder="Full Name" required style="padding: 13px">
                            <input type="email" name="remail" class="form-control" placeholder="Email Id" required style="padding: 13px">
                            <input type="number" name="rmobile" class="form-control" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile" required style="padding: 5px 10px">
                            <select name="ryear" class="form-control" style="padding: 0px 12px !important; color: #999 !important; padding: 13px" onchange="funselect(this)" value="0">
                              <option value="0" selected disabled style="color: #aaa">Select Year</option>
                              <option value="1" style="color: #555 !important;">1st Year</option>
                              <option value="2" style="color: #555 !important;">2nd Year</option>
                              <option value="3" style="color: #555 !important;">3rd Year</option>
                              <option value="4" style="color: #555 !important;">4th Year</option>
                            </select>
                            <input type="text" name="rcollege" class="form-control" placeholder="College" required style="padding: 13px">
                            <input type="password" name="rpassword" class="form-control" placeholder="Password" required style="padding: 5px 10px"><br>
                            
                            <div class="g-recaptcha" data-sitekey="6LdzB0UUAAAAALPgI9kNqVemD2hKKVyOfwTgmSBD"></div>

                            <button class="enter" type="submit" style="transform: scale(0.7); margin: 10px auto -30px auto;">
                                <hr style="width: 100%;	border: none; border-top: solid 1px #42cbf8; margin: 0 auto;">
                                <h2 style="padding: 10px 0; margin: 0;">REGISTER</h2>
                                <hr style="width: 80%; border: none; border-bottom: solid 1px #42cbf8; margin: 0 auto;">
                            </button>
                            <h4 style="transform: scale(1.2); margin: 0; margin-bottom: 15px; color: #aaa" id="bottom">Already have an account? <a href="#" id="signin" onclick="document.getElementById('login_title').innerHTML='LOGIN';">Login</a></h4>
                        </form>
                    </div>
                    <?php
                        }
                    ?>

                    <div id="after-login" style='display: <?php if(isset($_SESSION["email"]))
                        echo "block"; else echo "none"; ?>'>
                        <h3 style="color: white">Welcome <span id="username"><?php echo @$_SESSION["name"] ?></span></h3>
                        <button class="enter" style="transform: scale(0.7); margin: 0;" onclick="window.location='logout.php'">
                            <hr style="width: 100%;	border: none; border-top: solid 1px #42cbf8; margin: 0 auto;">
                            <h2 style="padding: 10px 0; margin: 0;">SIGN OUT</h2>
                            <hr style="width: 80%; border: none; border-bottom: solid 1px #42cbf8; margin: 0 auto;">
                        </button><br/>
                    </div>
                </div>
                <div class="modal_footer" style="text-align: center"></div>
            </div>
        </div>
        <script src="js/scrolling-nav.js"></script>
        <script>
            //Lumin Registration
            $(document).ready(function(){
                $("#lumin").submit(function(){
                    var data = $("#lumin").serialize();
                    luminRecords(data);
                    return false;
                });
                function luminRecords(data){
                    $.ajax({
                        url : 'lumin.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Sphinxite Registration
            $(document).ready(function(){
                $("#sphinxite").submit(function(){
                    var data = $("#sphinxite").serialize();
                    sphinxiteRecords(data);
                    return false;
                });
                function sphinxiteRecords(data){
                    $.ajax({
                        url : 'sphinxite.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Cybertron Registration
            $(document).ready(function(){
                $("#cybertron").submit(function(){
                    var data = $("#cybertron").serialize();
                    cybertronRecords(data);
                    return false;
                });
                function cybertronRecords(data){
                    $.ajax({
                        url : 'cybertron.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Arcadia Registration
            $(document).ready(function(){
                $("#arcadia").submit(function(){
                    var data = $("#arcadia").serialize();
                    arcadiaRecords(data);
                    return false;
                });
                function arcadiaRecords(data){
                    $.ajax({
                        url : 'arcadia.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Ethos Registration
            $(document).ready(function(){
                $("#ethos").submit(function(){
                    var data = $("#ethos").serialize();
                    ethosRecords(data);
                    return false;
                });
                function ethosRecords(data){
                    $.ajax({
                        url : 'ethos.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Crypton Registration
            $(document).ready(function(){
                $("#crypton").submit(function(){
                    var data = $("#crypton").serialize();
                    cryptonRecords(data);
                    return false;
                });
                function cryptonRecords(data){
                    $.ajax({
                        url : 'crypton.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Imago Registration
            $(document).ready(function(){
                $("#imago").submit(function(){
                    var data = $("#imago").serialize();
                    imagoRecords(data);
                    return false;
                });
                function imagoRecords(data){
                    $.ajax({
                        url : 'imago.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            //Orvillon Registration
            $(document).ready(function(){
                $("#orvillon").submit(function(){
                    var data = $("#orvillon").serialize();
                    orvillonRecords(data);
                    return false;
                });
                function orvillonRecords(data){
                    $.ajax({
                        url : 'orvillon.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 300){
                                alert("Please Login before you can Register for any event");
                            }
                            if(data.code == 200){
                                alert("Registration Successfull");
                                updateEvents(data);
                            }
                        },
                        error: function(){
                            alert("Registration Failed");
                        }
                    });
                }
            });

            function loggedIn()
            {
                $("#logincontainer").hide();
                $("#after-login").show();
                document.getElementById('login_a').innerHTML="Profile";
                document.getElementById('login_title').innerHTML="Profile";
                var session = 1;
            }
            function noSession()
            {
                $("#logincontainer").show();
                $("#after-login").hide();
                var session = 0;
            }
            //To be changed
            function updateEvents(data){
                if(data.envision == '1'){
                    document.getElementById('envision').checked = true;
                    //document.getElementById('envision').disabled = true;
                }
                if(data.electrono == '1'){
                    document.getElementById('electrono').checked = true;
                    //document.getElementById('electrono').disabled = true;
                }
                if(data.biotech == '1'){
                    document.getElementById('biotech').checked = true;
                    //document.getElementById('biotech').disabled = true;
                }
                if(data.poster == '1'){
                    document.getElementById('poster').checked = true;
                }
                if(data.biogeek == '1'){
                    document.getElementById('biogeek').checked = true;
                }
                if(data.maths == '1'){
                    document.getElementById('maths').checked = true;
                }
                if(data.electrobox == '1'){
                    document.getElementById('electrobox').checked = true;
                }
                if(data.utopia == '1'){
                    document.getElementById('utopia').checked = true;
                }
                if(data.autotrix == '1'){
                    document.getElementById('autotrix').checked = true;
                }
                if(data.tracktrix == '1'){
                    document.getElementById('tracktrix').checked = true;
                }
                if(data.combat == '1'){
                    document.getElementById('combat').checked = true;
                }
                if(data.carrom == '1'){
                    document.getElementById('carrom').checked = true;
                }
                if(data.soccer == '1'){
                    document.getElementById('soccer').checked = true;
                }
                if(data.maze == '1'){
                    document.getElementById('maze').checked = true;
                }
                if(data.fifa == '1'){
                    document.getElementById('fifa').checked = true;
                }
                if(data.nfs == '1'){
                    document.getElementById('nfs').checked = true;
                }
                if(data.cs == '1'){
                    document.getElementById('cs').checked = true;
                }
                if(data.resolution == '1'){
                    document.getElementById('resolution').checked = true;
                }
                if(data.jam == '1'){
                    document.getElementById('jam').checked = true;
                }
                if(data.advermania == '1'){
                    document.getElementById('advermania').checked = true;
                }
                if(data.satyanweshi == '1'){
                    document.getElementById('satyanweshi').checked = true;
                }
                if(data.ardor == '1'){
                    document.getElementById('ardor').checked = true;
                }
                if(data.design == '1'){
                    document.getElementById('design').checked = true;
                }
                if(data.imitation == '1'){
                    document.getElementById('imitation').checked = true;
                }
                if(data.exposure == '1'){
                    document.getElementById('exposure').checked = true;
                }
                if(data.lens == '1'){
                    document.getElementById('lens').checked = true;
                }
                if(data.pixelate == '1'){
                    document.getElementById('pixelate').checked = true;
                }
                if(data.quad == '1'){
                    document.getElementById('quad').checked = true;
                }
                if(data.aerostorm == '1'){
                    document.getElementById('aerostorm').checked = true;
                }
            }


            $(document).ready(function(){
                $("#loginform").submit(function(){
                    var data = $("#loginform").serialize();
                    checkRecords(data);
                    return false;
                });
                function checkRecords(data){
                    
                    $.ajax({
                        url : 'loginprocess.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 200){
                                //alert('You have successfully logged in');
                                //window.location='dashboard.php';
                                loggedIn();
                                $("#username").text(data.name);
                                updateEvents(data);
                                //location.reload();
                            }
                            else{
                                $(".display-error").html("<ul>"+data.msg+"</ul");
                                $(".display-error").css("display","block");
                            }
                        },
                        error: function(){
                            alert("Email/Password is Incorrect");
                            noSession();
                    }
                    });
                }
            });
        
        </script>
        <!--Signup Ajax-->
        <script>
        
            $(document).ready(function(){
                $("#registerform").submit(function(){
                    var data = $("#registerform").serialize();
                    signupRecords(data);
                    return false;
                });
                function signupRecords(data){
                    
                    $.ajax({
                        url : 'signupprocess.php',
                        data : data,
                        type : 'POST',
                        dataType : 'json',
                        success: function(data){
                            if(data.code == 200){
                                alert('You have successfully Registered! \n Please Login now.');
                                $("#signupcontainer").hide();
                                $("#logincontainer").show();
                                document.getElementById('login_title').innerHTML='LOGIN';
                            }
                            else{
                                alert(data.msg);
                            }
                        },
                        error: function(jqXHR,exception)
                        {
                            console.log(jqXHR);
                        }
                    });
                }
            });
        </script>
        <?php 
          if(isset($_SESSION["email"]))
          {
            $st = $db->prepare("SELECT envision, electrono, biotech, poster, electrobox, maths, biogeek, utopia, autotrix, tracktrix, combat, soccer, carrom, maze, fifa, nfs, cs, resolution, jam, advermania, satyanweshi, ardor, design, imitation, lens, exposure, pixelate, quad, aerostorm FROM users WHERE email = '".$_SESSION['email']."'");
            $st->execute();
            if($row = $st->fetch(PDO:: FETCH_ASSOC))
            {
                echo "<script> ";
                if($row['envision'] == "1"){
                  echo "document.getElementById('envision').checked = true;";
                }
                else
                  echo "document.getElementById('envision').checked = false;";
                if($row['electrono']=="1"){
                  echo "document.getElementById('electrono').checked = true;";
                  //echo "document.getElementById('electrono').disabled = true; ";
                }
                else
                  echo "document.getElementById('electrono').checked = false; ";
                if($row['biotech']=="1"){
                  echo "document.getElementById('biotech').checked = true;";
                  //echo "document.getElementById('biotech').disabled = true; ";
                }
                else
                  echo "document.getElementById('biotech').checked = false;";
                if($row['poster']=="1"){
                  echo "document.getElementById('poster').checked = true;";
                  //echo "document.getElementById('poster').disabled = true; ";
                }
                else
                  echo "document.getElementById('poster').checked = false;";
                if($row['electrobox'] == "1"){
                  echo "document.getElementById('electrobox').checked = true;";
                }
                else
                  echo "document.getElementById('electrobox').checked = false;";
                if($row['maths'] == "1"){
                  echo "document.getElementById('maths').checked = true;";
                }
                else
                  echo "document.getElementById('maths').checked = false;";
                if($row['biogeek'] == "1"){
                  echo "document.getElementById('biogeek').checked = true;";
                }
                else
                  echo "document.getElementById('biogeek').checked = false;";
                if($row['utopia'] == "1"){
                  echo "document.getElementById('utopia').checked = true;";
                }
                else
                  echo "document.getElementById('utopia').checked = false;";
                if($row['autotrix'] == "1"){
                  echo "document.getElementById('autotrix').checked = true;";
                }
                else
                  echo "document.getElementById('autotrix').checked = false;";
                if($row['tracktrix'] == "1"){
                  echo "document.getElementById('tracktrix').checked = true;";
                }
                else
                  echo "document.getElementById('tracktrix').checked = false;";
                if($row['combat'] == "1"){
                  echo "document.getElementById('combat').checked = true;";
                }
                else
                  echo "document.getElementById('combat').checked = false;";
                if($row['soccer'] == "1"){
                  echo "document.getElementById('soccer').checked = true;";
                }
                else
                  echo "document.getElementById('soccer').checked = false;";
                if($row['carrom'] == "1"){
                  echo "document.getElementById('carrom').checked = true;";
                }
                else
                  echo "document.getElementById('carrom').checked = false;";

                if($row['maze'] == "1"){
                  echo "document.getElementById('maze').checked = true;";
                }
                else
                  echo "document.getElementById('maze').checked = false;";
                if($row['fifa'] == "1"){
                  echo "document.getElementById('fifa').checked = true;";
                }
                else
                  echo "document.getElementById('fifa').checked = false;";
                if($row['nfs'] == "1"){
                  echo "document.getElementById('nfs').checked = true;";
                }
                else
                  echo "document.getElementById('nfs').checked = false;";
                if($row['cs'] == "1"){
                  echo "document.getElementById('cs').checked = true;";
                }
                else
                  echo "document.getElementById('cs').checked = false;";
                if($row['resolution'] == "1"){
                  echo "document.getElementById('resolution').checked = true;";
                }
                else
                  echo "document.getElementById('resolution').checked = false;";
                if($row['jam'] == "1"){
                  echo "document.getElementById('jam').checked = true;";
                }
                else
                  echo "document.getElementById('jam').checked = false;";
                if($row['advermania'] == "1"){
                  echo "document.getElementById('advermania').checked = true;";
                }
                else
                  echo "document.getElementById('advermania').checked = false;";
                if($row['satyanweshi'] == "1"){
                  echo "document.getElementById('satyanweshi').checked = true;";
                }
                else
                  echo "document.getElementById('satyanweshi').checked = false;";
                if($row['ardor'] == "1"){
                  echo "document.getElementById('ardor').checked = true;";
                }
                else
                  echo "document.getElementById('ardor').checked = false;";
                if($row['design'] == "1"){
                  echo "document.getElementById('design').checked = true;";
                }
                else
                  echo "document.getElementById('design').checked = false;";
                if($row['imitation'] == "1"){
                  echo "document.getElementById('imitation').checked = true;";
                }
                else
                  echo "document.getElementById('imitation').checked = false;";
                if($row['lens'] == "1"){
                  echo "document.getElementById('lens').checked = true;";
                }
                else
                  echo "document.getElementById('lens').checked = false;";
                if($row['exposure'] == "1"){
                  echo "document.getElementById('exposure').checked = true;";
                }
                else
                  echo "document.getElementById('exposure').checked = false;";
                if($row['pixelate'] == "1"){
                  echo "document.getElementById('pixelate').checked = true;";
                }
                else
                  echo "document.getElementById('pixelate').checked = false;";
                if($row['quad'] == "1"){
                  echo "document.getElementById('quad').checked = true;";
                }
                else
                  echo "document.getElementById('quad').checked = false;";
                if($row['aerostorm'] == "1"){
                  echo "document.getElementById('aerostorm').checked = true;";
                }
                else
                  echo "document.getElementById('aerostorm').checked = false;";
                echo " </script>";
            }
          }

          if(empty($_SESSION)) //Checking if session variable exists or not
          {
              echo "<script>var session = 0;</script>";
          }
          else
          {
              echo "<script>document.getElementById('login_a').innerHTML='PROFILE';</script>";
              echo "<script>document.getElementById('login_title').innerHTML='PROFILE';</script>";
          }
         ?>
	</body>
</html>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->