<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
        $ad = isset($_POST['ardor'])? $_POST['ardor'] : 0;
        $de = isset($_POST['design'])? $_POST['design'] : 0;
        $ig = isset($_POST['imitation'])? $_POST['imitation'] : 0;
        $stmt = $db->prepare("UPDATE users SET ardor = :ad, design = :de, imitation = :ig WHERE email = :email");
        $stmt->bindParam(':ad', $ad, PDO::PARAM_INT);
        $stmt->bindParam(':de', $de, PDO::PARAM_INT);
        $stmt->bindParam(':ig', $ig, PDO::PARAM_INT);
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        if($affected_rows == 1){
            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'ardor'=>$ad, 
                'design'=>$de, 'imitation'=>$ig]);
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