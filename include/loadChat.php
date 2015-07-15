<?php
if  ($_SERVER['REQUEST_METHOD']  == 'POST' ){
	session_start();
	include '../modules/config.php';
	$db =  new mysqli(DB_LOCATION, DB_USER, DB_PASSWORD, DB_NAME);
	$db->query("SET NAMES UTF8");
	if (mysqli_connect_errno()) {
   		printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   		exit;
	}
	if (isset($_POST['chanel'])){
		if ($_POST['chanel'] == '15'){
			$result =$db->query("SELECT chats.text,
												users.name ,
												chats.id,
												chats.target
												FROM chats,  users  
												WHERE chats.autor = users.id 
												AND chanel='".mysqli_real_escape_string($db, $_POST['chanel'])."' 
												AND chats.target ='".$_SESSION['id']."'
												ORDER BY chats.id ASC
												LIMIT 20
												");
		} else $result =$db->query("SELECT chats.text,
												users.name ,
												chats.id
												FROM chats,  users  
												WHERE chats.autor = users.id AND chanel='".mysqli_real_escape_string($db, $_POST['chanel'])."' 
												ORDER BY chats.id ASC
												LIMIT 20
												");
	}
		

	while($row = mysqli_fetch_assoc($result)) {
		echo '<p><b>'.$row['name'].':</b> '.$row['text'].'</p>';
	}
}else{
	echo 'GET LOST!'; 
} 

?>	
