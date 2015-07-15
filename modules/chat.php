<?php
		if (!isset($_SESSION['status'])){//если пользователь не авторизирован оправляем на авторизацию
			header("Location: /login");
			exit; 
		}
?>
 