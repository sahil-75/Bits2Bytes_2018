<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
        $re = isset($_POST['resolution'])? $_POST['resolution'] : 0;
        $jm = isset($_POST['jam'])? $_POST['jam'] : 0;
        $am = isset($_POST['advermania'])? $_POST['advermania'] : 0;
        $sy = isset($_POST['satyanweshi'])? $_POST['satyanweshi'] : 0;
        $stmt = $db->prepare("UPDATE users SET resolution = :re, jam = :jm, advermania = :am, satyanweshi = :sy WHERE email = :email");
        $stmt->bindParam(':re', $re, PDO::PARAM_INT);
        $stmt->bindParam(':jm', $jm, PDO::PARAM_INT);
        $stmt->bindParam(':am', $am, PDO::PARAM_INT);
        $stmt->bindParam(':sy', $sy, PDO::PARAM_INT);
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        if($affected_rows == 1){
            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'resolution'=>$re, 
                'jam'=>$jm, 'advermania'=>$am, 'satyanweshi'=>$sy]);
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