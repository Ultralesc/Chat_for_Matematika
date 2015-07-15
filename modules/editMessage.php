<?php
	if (!isset($_SESSION['status']) || $_SESSION['status'] !=='Admin') {//если пользователь не авторизирован оправляем на авторизацию
		header("Location: /login");
		exit; 
	};
	if  ($_SERVER['REQUEST_METHOD']  == 'POST' ){
		if (isset($_POST['delMessage'])){
			$delMessage =mysqli_real_escape_string($db, $_POST['delMessage'] );	
			$db->query("DELETE FROM chats
													WHERE id = {$delMessage} ");

			$err = '<p style="color:green">Сообщение '.$delMessage.' успешно удалёно</p>';
		};
		if (isset($_POST['editMessage'], $_POST['Message'])){
			$editMessage =mysqli_real_escape_string($db, $_POST['editMessage'] );
			$Message =mysqli_real_escape_string($db, $_POST['Message'] );
			$db->query("UPDATE chats 
									SET `text`= {$editMessage}
									WHERE id = {$Message} ");
			$err = '<p style="color:green">Сообщение успешно изменёно</p>';
		};
	};
	
	$result= $db->query("SELECT COUNT(*) FROM chats ");		// количество записей в базе
	$row = mysqli_fetch_row($result);
	$countN = $row[0]; 
	
	$lim ='0';
	if (isset($_GET['key1'])){
		$_GET['key1']  = abs(intval($_GET['key1']));
	}else {
		$_GET['key1']  = 0;
	}
	if ($_GET['key1'] > 0) {
		$_GET['key1'] -= 1;
	}
	$lim = $_GET['key1']*10;
	$prev = $_GET['key1'];
	$next = $_GET['key1']+2;
	$result2 = $db->query("SELECT chats.id,
															users.name,
															chanels.nameChanel,
															chats.text
												FROM chats,  users, chanels   
												WHERE chats.autor = users.id 
												AND chats.chanel = chanels.id 
												ORDER BY chats.id DESC 
												LIMIT $lim, 10");
?>

 