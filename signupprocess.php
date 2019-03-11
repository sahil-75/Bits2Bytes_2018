<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
ob_start();
require_once('dbconnect.php');

$errorMsg = "";
$rname = trim($_POST["rname"]);
$remail = trim($_POST["remail"]);
$ryear = trim($_POST["ryear"]);
$rcollege = trim($_POST["rcollege"]);
$rpassword = trim($_POST["rpassword"]);
$rmobile = trim($_POST["rmobile"]);

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

    if(empty($rname)){
        $errorMsg .= "<li>Name is require</li>";
    }else{
        $rname = $rname;
    }
    if(empty($remail)){
        $errorMsg .= "<li>Email is require</li>";
    }else{
        $remail = filterEmail($remail);
        if($remail == FALSE){
            $errorMsg .= "<li>Invalid Email Format</li>";
        }
    }

    if(empty($rpassword)){
        $errorMsg .= "<li>Password is required</li>";
    }else{
        $rpassword = password_hash($rpassword, PASSWORD_DEFAULT);
    }

    if(empty($rmobile)){
        $errorMsg .= "<li>Mobile No is required</li>";
    }else{
        $rmobile = $rmobile;
    }

    if(empty($ryear)){
        $errorMsg .= "<li>Year is required</li>";
    }else{
        $ryear = $ryear;
    }

    if(empty($rcollege)){
        $errorMsg .= "<li>College name is required</li>";
    }else{
        $rcollege = $rcollege;
    }

    if(empty($errorMsg)){
        $qry = $db->prepare("SELECT email FROM users WHERE email=?");
        $qry->bindParam(1,$remail);
        $qry->execute();
        
        if($qry->rowCount()>0){
            echo json_encode(['code'=>400, 'msg'=>'Email Already Exists']);
            exit;
        }
        else{
            $stmt = $db->prepare("INSERT INTO users(name,email,mobile,year,college,password) VALUES(:name, :email, :mobile, :year, :college, :password)");
            $stmt->execute(array(':name'=>$rname, ':email'=>$remail, ':mobile'=>$rmobile, ':year'=>$ryear, ':college'=>$rcollege, ':password'=>$rpassword));
            $affected_rows = $stmt->rowCount();
            if($affected_rows == 1){
                echo json_encode(['code'=>200, 'msg'=>'You have successfully signed up']);
                exit;
            }
            else{
                echo json_encode(['code' =>400]);
                exit;
            }
        }
    }
    else{
        echo json_encode(['code'=>404, 'msg'=>$errorMsg]);
    }
?>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->