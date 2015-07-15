<?php
	if (!isset($_SESSION['status']) || $_SESSION['status'] !=='Admin') {//если пользователь не авторизирован оправляем на авторизацию
		header("Location: /login");
		exit; 
	};
	if  ($_SERVER['REQUEST_METHOD']  == 'POST' ){
		if (isset($_POST['addChanel'])){
			$addChanel =mysqli_real_escape_string($db, $_POST['addChanel'] );	
			$db->query("INSERT INTO chanels (name)
													values('".$addChanel."')
													");
			$err = '<p style="color:green">Канал успешно добавлен</p>';
		};
		if (isset($_POST['delChanel'])){
			$delChanel =mysqli_real_escape_string($db, $_POST['delChanel'] );	
			$db->query("DELETE FROM chanels 
													WHERE id ='".$delChanel."'");

			$err = '<p style="color:green">Канал успешно удалён</p>';
		};
		if (isset($_POST['editChanel'], $_POST['Chanel'])){
			$editChanel =mysqli_real_escape_string($db, $_POST['editChanel'] );
			$Chanel =mysqli_real_escape_string($db, $_POST['Chanel'] );
			$db->query("UPDATE chanels 
									SET `nameChanel`='".$editChanel."'
									WHERE id ='".$Chanel."'");
			$err = '<p style="color:green">Канал успешно изменён</p>';
		};
	}	
?>

 