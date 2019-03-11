<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
        $fa = isset($_POST['fifa'])? $_POST['fifa'] : 0;
        $ns = isset($_POST['nfs'])? $_POST['nfs'] : 0;
        $cs = isset($_POST['cs'])? $_POST['cs'] : 0;
        $stmt = $db->prepare("UPDATE users SET fifa = :fa, nfs = :ns, cs = :cs WHERE email = :email");
        $stmt->bindParam(':fa', $fa, PDO::PARAM_INT);
        $stmt->bindParam(':ns', $ns, PDO::PARAM_INT);
        $stmt->bindParam(':cs', $cs, PDO::PARAM_INT);
        $stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        if($affected_rows == 1){
            echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'fifa'=>$fa, 
                'nfs'=>$ns, 'cs'=>$cs]);
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