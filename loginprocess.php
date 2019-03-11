<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
ob_start();
session_start();
require_once('dbconnect.php');
$errorMsg = "";

function filterEmail($field)
{
    //Sanitize email address
    $field = filter_var(trim($field),FILTER_SANITIZE_EMAIL);
    //Validate email address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    }
    else{
        return FALSE;
    }
}

if(isset($_POST["lemail"]))
{
    $email = trim($_POST["lemail"]);
    $password = trim($_POST["lpassword"]);
    if(empty($email)){
        $errorMsg .= "<li>Email is required</li>";
    }
    else{
        $email = filterEmail($email);
        if($email == FALSE){
            $errorMsg .= "<li>Invalid Email Format</li>";
        }
    }

    if(empty($password)){
        $errorMsg .= "<li>Password Required.</li>";
    }
    else{
        $password = $password;
    }

    if(empty($errorMsg)){
        $query = $db->prepare("SELECT password from users WHERE email = ?");
        $query->execute(array($email));
        $pwd = $query->fetchColumn();
        if(password_verify($password, $pwd)){
            $_SESSION['email'] = $email;
            //Testing piece
            $qry = $db->prepare("SELECT name from users WHERE email = ?");
            $qry->execute(array($email));
            $nme = $qry->fetchColumn();
            $_SESSION['name']=$nme;
            //Testing code ends

            $qry = $db->prepare("SELECT envision, electrono, biotech, poster, electrobox, maths, biogeek, utopia, autotrix, tracktrix, combat, soccer, carrom, maze, fifa, nfs, cs, resolution, jam, advermania, satyanweshi, ardor, design, imitation, lens, exposure, pixelate, quad, aerostorm FROM users WHERE email=?");
            $qry->execute(array($email));
            while($row = $qry->fetch(PDO :: FETCH_ASSOC))
            {
                $_SESSION['envision'] = $row['envision'];
                $_SESSION['electrono'] = $row['electrono'];
                $_SESSION['biotech'] = $row['biotech'];
                $_SESSION['poster'] = $row['poster'];
                $_SESSION['electrobox'] = $row['electrobox'];
                $_SESSION['maths'] = $row['maths'];
                $_SESSION['biogeek'] = $row['biogeek'];
                $_SESSION['utopia'] = $row['utopia'];
                $_SESSION['autotrix'] = $row['autotrix'];
                $_SESSION['tracktrix'] = $row['tracktrix'];
                $_SESSION['combat'] = $row['combat'];
                $_SESSION['soccer'] = $row['soccer'];
                $_SESSION['carrom'] = $row['carrom'];
                $_SESSION['maze'] = $row['maze'];
                $_SESSION['fifa'] = $row['fifa'];
                $_SESSION['nfs'] = $row['nfs'];
                $_SESSION['cs'] = $row['cs'];
                $_SESSION['resolution'] = $row['resolution'];
                $_SESSION['jam'] = $row['jam'];
                $_SESSION['advermania'] = $row['advermania'];
                $_SESSION['satyanweshi'] = $row['satyanweshi'];
                $_SESSION['ardor'] = $row['ardor'];
                $_SESSION['design'] = $row['design'];
                $_SESSION['imitation'] = $row['imitation'];
                $_SESSION['lens'] = $row['lens'];
                $_SESSION['exposure'] = $row['exposure'];
                $_SESSION['pixelate'] = $row['pixelate'];
                $_SESSION['quad'] = $row['quad'];
                $_SESSION['aerostorm'] = $row['aerostorm'];
            }

            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 
                'envision'=>$_SESSION['envision'], 'electrono'=>$_SESSION['electrono'], 'biotech'=>$_SESSION['biotech'], 'poster'=>$_SESSION['poster'], 'electrobox'=>$_SESSION['electrobox'], 'maths'=>$_SESSION['maths'], 'biogeek'=>$_SESSION['biogeek'], 'utopia'=>$_SESSION['utopia'], 'autotrix'=>$_SESSION['autotrix'], 'tracktrix'=>$_SESSION['tracktrix'], 'combat'=>$_SESSION['combat'], 'soccer'=>$_SESSION['soccer'], 'carrom'=>$_SESSION['carrom'], 'maze'=>$_SESSION['maze'], 'fifa'=>$_SESSION['fifa'], 'nfs'=>$_SESSION['nfs'], 'cs'=>$_SESSION['cs'], 'resolution'=>$_SESSION['resolution'], 'jam'=>$_SESSION['jam'], 'advermania'=>$_SESSION['advermania'], 'satyanweshi'=>$_SESSION['satyanweshi'], 'ardor'=>$_SESSION['ardor'], 'design'=>$_SESSION['design'], 'imitation'=>$_SESSION['imitation'], 'lens'=>$_SESSION['lens'], 'exposure'=>$_SESSION['exposure'], 'pixelate'=>$_SESSION['pixelate'] ,'quad'=>$_SESSION['quad'], 'aerostorm'=>$_SESSION['aerostorm']]);
            exit;
        }
        else{
            json_encode(['code'=>400, 'msg'=>'Invalid Email/Password']);
            exit;
        }
    }
    else{
        echo json_encode(['code'=>404, 'msg'=>$errorMsg]);
    }
}
?>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->