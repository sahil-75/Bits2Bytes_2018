<!--Developed by SAHIL G. KALYANI-->

<?php
    session_start();

    if(empty($_SESSION)) //Checking if session variable exists or not
    {
        header("Location: index.php");
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

  <body style="background: white; color: #FE524C; position: relative;">
    <div class="container" style="text-align: center !important; margin-top:25px">
    	<?php
            echo $_SESSION['database'];
	    ?>
    </div>
  </body>
</html>

<!--Developed by SAHIL G. KALYANI-->