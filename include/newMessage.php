<?php
if  ($_SERVER['REQUEST_METHOD']  == 'POST' ){
	include '../modules/config.php';
	session_start();
	$db =  new mysqli(DB_LOCATION, DB_USER, DB_PASSWORD, DB_NAME);
	$db->query("SET NAMES UTF8");
	if (mysqli_connect_errno()) {
   		printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   		exit;
	};
	
	
	
	
	if (isset($_POST['chanel'], $_POST['message'], $_SESSION['id'])) {
		if ($_POST['user'] ==''){
			$chanel =mysqli_real_escape_string($db, $_POST['chanel'] );	
			$message =mysqli_real_escape_string($db, $_POST['message'] );	
			$db->query("INSERT INTO chats (autor, 
															chanel, 
															text)
															values('".$_SESSION['id']."', '".$chanel."','".$message."')
															");
		} else {
			$chanel =mysqli_real_escape_string($db, $_POST['chanel'] );	
			$message =mysqli_real_escape_string($db, $_POST['message'] );
			$user =mysqli_real_escape_string($db, $_POST['user'] );
			$db->query("INSERT INTO chats (autor,
															target,
															chanel, 
															text)
															values('".$_SESSION['id']."', '".$user."', '".$chanel."','".$message."')
															");
		}
		
	} else if (isset($_POST['chanel'], $_POST['message'], $_SESSION['id'])) {

 
	} else {
				echo 'ERROR!';
	}
}else{
	echo 'GET LOST!'; 
} 		
?>	
