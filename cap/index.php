<!--Developed by SAHIL G. KALYANI-->

<?php

define ('SITE_ROOT', realpath(dirname(__FILE__)));

$fullname = $stream = $year = $college = $email = $phone = $ans1 = $ans2 = "";

if(isset($_POST["f_fullname"]))
{
    function validateFormData($formdata)
    {
        $formdata = trim(stripcslashes(htmlspecialchars($formdata)));
        return $formdata;
    }

    $fullname = strtoupper(validateFormData($_POST["f_fullname"]));
    $stream = strtoupper(validateFormData($_POST["f_stream"]));
    $year = validateFormData($_POST["f_year"]);
    $college = strtoupper(validateFormData($_POST["f_college"]));
    $email = validateFormData($_POST["f_email"]);
    $phone = validateFormData($_POST["f_phone"]);
    $ans1 = validateFormData($_POST["ans1"]);
    $ans2 = validateFormData($_POST["ans2"]);
    
    if($fullname && $stream && $year && $college && $email && $phone && $ans1 && $ans2)
    {
        //Connect to database

        /*FOR WAMP SERVER
        $server     = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "my_first_database";*/

        $conn = mysqli_connect($server, $username, $password, $db);

        if(!$conn)
        {
            die("Connection failed: ". mysqli_connect_error()."<br>");
        }

        //Create SQL query
        $query = "INSERT INTO `cap` (`fullname`, `email`, `phone`, `stream`, `year`, `college`, `ans1`, `ans2`) VALUES ('$fullname', '$email', '$phone', '$stream', '$year', '$college', '$ans1', '$ans2')";

        if(mysqli_query($conn,$query))
        {
            $message = "Registered Successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
            $message = "Fatal Error! Please Try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        mysqli_close($conn);
    }
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Official Website of Bits2Bytes 2018">
    <meta name="author" content="Sahil Kalyani">

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

    <style>
        *
        {
            color: white;
        }
        body
        {
            background: #4f7514 !important;
        }
        .glyphicon
        {
            color: #444 !important;
        }
        h1,h2,h3,h4,h5
        {
            text-align: center;
            font-weight: bold;
        }
        hr
        {
            border-width: medium;
        }
        li
        {
            font-size: 1.5em;
            line-height: 1.1em;
            margin: 5px 0;
        }
        p
        {
            font-size: 1.5em;
            line-height: 1.1em;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button,
        input[type=date]::-webkit-inner-spin-button, 
        input[type=date]::-webkit-outer-spin-button
        { 
           -webkit-appearance: none; 
           margin: 0; 
        }
        label
        {
            color: black;
        }
        input::placeholder, textarea::placeholder
        {
            color: #222 !important;
        }
        .totop
        {
            position: fixed;
            bottom: 15px;
            right: 15px;
            cursor: pointer;
            transition: all 0s ease;
        }
        .totoptip
        {
            visibility: hidden;
            background: white;
            color: black;
            font-weight: bold;
            font-size: 1.2em;
            margin-right: 10px;
            margin-top: 7px;
            padding: 12px;
            border-radius: 5px;
            transition: all 0.2s ease;
        }
        .totop:hover .totoptip
        {
            visibility: visible;
        }
    </style>
    <script>
        function mod()
        {
            alert("For Registration Related Queries, feel free to contact: \n\nSahil Kalyani - 8902257840 \nShubham Gupta - 9836453043");
        }
    </script>
    <title>Bits2Bytes 2018</title>
  </head>

  <body>
      <div style="width: 100%; margin: 80px"></div>
      <nav class="navbar navbar-inverse navbar-fixed-top" id="header" style="background: #201D23 !important; box-shadow: 0 0 35px -8px #000; border: none; transition: all 0.7s ease;">
        <div class="container-fluid row" style="padding: 15px 5% 15px 10%;">
          <div class="col-xs-10">
          	 <a style="color: white; font-size: 2em; font-weight: bold; text-decoration: none; cursor: pointer">Bits2Bytes 2018</a>
          </div>
          <div class="col-xs-2">
             <span class="glyphicon glyphicon-question-sign" style="color: white !important; font-size: 2.8em; float: right; cursor: pointer" onclick="mod()"></span>
          </div>
        </div>
      </nav>
      
      <div class="container">
        <div class="row" style="margin-top: 10px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form id="cap_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" style="background: white; box-shadow:0 0 35px -8px #000; padding: 25px; box-sizing: border-box; margin: 0">
                    <div class='alert alert-danger' id="error3" style="display: none"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="f_register-fullname" name="f_fullname" placeholder="Full Name" style="color: black;">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="f_register-stream" name="f_stream" placeholder="Stream" style="color: black;">
                    </div>

                    <div class="form-group">
                        <select name="f_year" class="form-control" id="f_register-year" style="padding: 0px 8px !important; color: #222 !important;" onchange="funselect(this)" value="0">
                          <option value="0" selected disabled style="color: #aaa">Select Year</option>
                          <option value="1" style="color: #222 !important;">1st Year</option>
                          <option value="2" style="color: #222 !important;">2nd Year</option>
                          <option value="3" style="color: #222 !important;">3rd Year</option>
                          <option value="4" style="color: #222 !important;">4th Year</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="f_register-college" name="f_college" placeholder="College" style="color: black">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="f_register-email" name="f_email" placeholder="Email Id" style="color: black">
                    </div>

                    <div class="form-group">
                        <input type="number" min="0" class="form-control" id="f_register-phone" name="f_phone" placeholder="Phone Number" style="color: black">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="f_register-ans1" name="ans1" rows="3" placeholder="Why do you want to become a Bits2Bytes Campus Ambassador?" style="color: black; resize: none"></textarea>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="f_register-ans2" name="ans2" rows="3" placeholder="How will you promote Bits2Bytes 2018?" style="color: black; resize: none"></textarea>
                    </div>

                    <a name="f_register" class="btn btn-danger" style="color: #fff;" onclick="validate3()">Register</a>
                </form>
            </div>
            <div class="col-md-3"></div>
          </div>
      </div>
      <script>
        function validate3()
        {
            var fullname = document.getElementById('f_register-fullname').value;
            var stream = document.getElementById('f_register-stream').value;
            var year = document.getElementById('f_register-year').value;
            var college = document.getElementById('f_register-college').value;
            var email = document.getElementById('f_register-email').value;
            var phone = document.getElementById('f_register-phone').value;
            var phone = document.getElementById('f_register-phone').value;
            var ans1 = document.getElementById('f_register-ans1').value;
            var ans2 = document.getElementById('f_register-ans2').value;

            document.getElementById('error3').style.display = "none";

            if(fullname=="")
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter Your Full Name!";
            }
            else if(stream=='0')
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter Your Stream!";
            }
            else if(year=='0')
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter the Year!";
            }
            else if(college=="")
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter the name of your college!";
            }
            else if(email=="")
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter Your Email Address!";
            }
            else if(phone=="")
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter Your Phone Number!";
            }
            else if(ans1=="")
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter a valid answer";
            }
            else if(ans2=="")
            {
                document.getElementById('error3').style.display = "block";
                document.getElementById('error3').innerHTML = "Please Enter a valid answer";
            }
            else
            {
                document.getElementById('cap_form').submit();
            }
        }
      </script>
      
      <a class="totop" href="B2B_CAP.pdf" target="_blank" style="text-decoration: none;">
          <span class="totoptip">Download FAQs</span>
          <span class="glyphicon glyphicon-download-alt" style="font-size: 1.8em; color: white !important; background: black; border-radius: 100%; padding: 15px; margin:0"></span>
      </a>
  </body>
</html>

<!--Developed by SAHIL G. KALYANI-->