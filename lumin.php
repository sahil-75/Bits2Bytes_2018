<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
session_start();
include "dbconnect.php";
if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
    if(isset($_SESSION['email'])){
		$en = isset($_POST['envision'])? $_POST['envision'] : 0;
		$el = isset($_POST['electrono'])? $_POST['electrono'] : 0;
		$bt = isset($_POST['biotech'])? $_POST['biotech'] : 0;
		$po = isset($_POST['poster'])? $_POST['poster'] : 0;
		$stmt = $db->prepare("UPDATE users SET envision = :en, electrono = :el, biotech = :bt, poster = :po WHERE email = :email");
		$stmt->bindParam(':en', $en, PDO::PARAM_INT);
		$stmt->bindParam(':el', $el, PDO::PARAM_INT);
		$stmt->bindParam(':bt', $bt, PDO::PARAM_INT);
		$stmt->bindParam(':po', $po, PDO::PARAM_INT);
		$stmt->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
		$stmt->execute();
		$affected_rows = $stmt->rowCount();
		if($affected_rows == 1){
			echo json_encode(['code'=>200, 'email'=>$_SESSION['email'], 'name'=>$_SESSION['name'], 'envision'=>$en, 
	        	'electrono'=>$el, 'biotech'=>$bt, 'poster'=>$po]);
			exit;
		}
		else{
			json_encode(['code'=>400]);
	        exit;
		}
	}
	else{
		echo json_encode (['code'=>300]);
	}
}
?>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->