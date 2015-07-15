<?php
	if  ($_SERVER['REQUEST_METHOD']  == 'POST' ){
		if (isset($_POST['login'], $_POST['password'])){
			$result =$db->query("SELECT id,
												name, 
												login,
												password,
												status
												FROM users 
												WHERE login='".mysqli_real_escape_string($db, $_POST['login'])."' LIMIT 1");
			$result = mysqli_fetch_assoc($result);
			if(isset ($result['password']) && $result['password'] === $_POST['password'])	{// Сравниваем пароли
				$_SESSION['status'] = $result['status'];
				$_SESSION['name'] = $result['name'];
				$_SESSION['id'] = $result['id'];
				header("Location: /index.php");
				exit; 
   			}	else {
				$errorLogin = '<div class="center">Неправильный логин или пароль.</div>'; 
			}
		}else{
			$errorLogin = '<div class="center">Пустой логин или пароль.</div>'; 
		}
	} 		
?>	
