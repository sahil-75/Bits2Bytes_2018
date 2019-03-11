<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
        $ep = isset($_POST['exposure'])? $_POST['exposure'] : 0;
        $ls = isset($_POST['lens'])? $_POST['lens'] : 0;
        $pi = isset($_POST['pixelate'])? $_POST['pixelate'] : 0;
        $stmt = $db->prepare("UPDATE users SET exposure = :ep, lens = :ls, pixelate = :pi WHERE email = :email");
        $stmt->bindParam(':ep', $ep, PDO::PARAM_INT);
        $stmt->bindParam(':ls', $ls, PDO::PARAM_INT);
        $stmt->bindParam(':pi', $pi, PDO::PARAM_INT);
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        if($affected_rows == 1){
            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'exposure'=>$ep, 
                'lens'=>$ls, 'pixelate'=>$pi]);
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