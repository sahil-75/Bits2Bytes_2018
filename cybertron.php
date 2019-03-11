<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
        $at = isset($_POST['autotrix'])? $_POST['autotrix'] : 0;
        $tt = isset($_POST['tracktrix'])? $_POST['tracktrix'] : 0;
        $cc = isset($_POST['combat'])? $_POST['combat'] : 0;
        $rc = isset($_POST['carrom'])? $_POST['carrom'] : 0;
        $rs = isset($_POST['soccer'])? $_POST['soccer'] : 0;
        $mc = isset($_POST['maze'])? $_POST['maze'] : 0;
        $stmt = $db->prepare("UPDATE users SET autotrix = :at, tracktrix = :tt, combat = :cc, carrom = :rc, soccer = :rs, maze = :mc WHERE email = :email");
        $stmt->bindParam(':at', $at, PDO::PARAM_INT);
        $stmt->bindParam(':tt', $tt, PDO::PARAM_INT);
        $stmt->bindParam(':cc', $cc, PDO::PARAM_INT);
        $stmt->bindParam(':rc', $rc, PDO::PARAM_INT);
        $stmt->bindParam(':rs', $rs, PDO::PARAM_INT);
        $stmt->bindParam(':mc', $mc, PDO::PARAM_INT);
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        if($affected_rows == 1){
            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'autotrix'=>$at, 
                'tracktrix'=>$tt, 'combat'=>$cc, 'carrom'=>$rc , 'soccer'=>$rs, 'maze'=>$mc]);
            exit;
        }
        else{
            json_encode(['code'=>400]);
            exit;
        }
    }
    else{
		echo json_encode(['code'=> 300]);
	}
}
?>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->