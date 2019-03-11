<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
        $qd = isset($_POST['quad'])? $_POST['quad'] : 0;
        $at = isset($_POST['aerostorm'])? $_POST['aerostorm'] : 0;
        $stmt = $db->prepare("UPDATE users SET quad = :qd, aerostorm = :at WHERE email = :email");
        $stmt->bindParam(':qd', $qd, PDO::PARAM_INT);
        $stmt->bindParam(':at', $at, PDO::PARAM_INT);
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        if($affected_rows == 1){
            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'quad'=>$qd, 
                'aerostorm'=>$at]);
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