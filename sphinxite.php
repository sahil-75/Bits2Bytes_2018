<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
		$bg = isset($_POST['biogeek'])? $_POST['biogeek'] : 0;
		$ma = isset($_POST['maths'])? $_POST['maths'] : 0;
		$eb = isset($_POST['electrobox'])? $_POST['electrobox'] : 0;
		$ut = isset($_POST['utopia'])? $_POST['utopia'] : 0;
		$stmt = $db->prepare("UPDATE users SET biogeek = :bg, maths = :ma, electrobox = :eb, utopia = :ut WHERE email = :email");
		$stmt->bindParam(':bg', $bg, PDO::PARAM_INT);
		$stmt->bindParam(':ma', $ma, PDO::PARAM_INT);
		$stmt->bindParam(':eb', $eb, PDO::PARAM_INT);
		$stmt->bindParam(':ut', $ut, PDO::PARAM_INT);
		$stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
		$stmt->execute();
		$affected_rows = $stmt->rowCount();
		if($affected_rows == 1){
			echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'biogeek'=>$bg, 
	        	'maths'=>$ma, 'electrobox'=>$eb, 'utopia'=>$ut]);
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