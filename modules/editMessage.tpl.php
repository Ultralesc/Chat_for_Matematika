	<div id="forerror">
		<?php
			if (isset($err))
				echo $err;
		?>
	</div>
		<p>Редактор сообщений:</p>

<?php 

	while($row = mysqli_fetch_assoc($result2)) {
		echo '<form action="" method="post" enctype="multipart/form-data">';
		echo '<label>№ '.$row['id'].' от '.$row['name'].' в '.$row['nameChanel'].': </label>';
		echo '<input type="text" name="editMessage" value="'.$row['text'] .'" />';
		echo '<input type="hidden" name="Message" value="'.$row['id'] .'"/>';
		echo '&nbsp &nbsp &nbsp <input type="submit" title ="Редактировать сообщение" value="Редактировать" />';
		echo '</form>';						
		
		echo '<form action="" method="post" enctype="multipart/form-data">';
		echo '<input type="hidden" name="delMessage" value="'.$row['id'] .'"/>';
		echo '&nbsp &nbsp &nbsp <input type="submit" title ="Удалить сообщение" value="Удалить сообщение №' .$row['id'].'" />';
		echo '</form><br/>';
	}

	echo '<br><p>Всего  в  базе <b>'.$countN.'</b> сообщений</p><br>';
	echo  '<div class="center">';	
	
	if ($_GET['key1'] !== 0 ){
		echo '<a href="/editMessage/'.$prev.'">Назад</a>';
		echo '||';
	}
	echo  '<a href="/editMessage/'.$next.'">Вперед</a></div>';
?>
			
