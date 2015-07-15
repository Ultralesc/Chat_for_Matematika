	<div id="forerror">
		<?php
			if (isset($err))
				echo $err;
		?>
	</div>
	<div >
		<p>Сушествуюшие каналы:</p>
		<?php 
			$result =$db->query("SELECT * FROM chanels ");		//выборка всех каналов
			while($row = mysqli_fetch_assoc($result)) {
				echo '<form action="/editChanels" method="post" enctype="multipart/form-data">';
				echo '<label>Канал № '.$row['id'].' : </label>';
				echo '<input type="text" name="editChanel" value="'.$row['nameChanel'] .'" />';
				echo '<input type="hidden" name="Chanel" value="'.$row['id'] .'"/>';
				echo '&nbsp &nbsp &nbsp <input type="submit" title ="Редактировать канал" value="Редактировать" />';
				echo '</form>';						
				
				echo '<form action="/editChanels" method="post" enctype="multipart/form-data">';
				echo '<input type="hidden" name="delChanel" value="'.$row['id'] .'"/>';
				echo '&nbsp &nbsp &nbsp <input type="submit" title ="Удалить канал" value="Удалить канал ' .$row['nameChanel'].'" />';
				echo '</form><br/>';
			}	
		?>
	</div>				
	<form action="/editChanels" method="post" enctype="multipart/form-data">
		<p>Добавить канал</p>
		<input type="text" name="addChanel" />
		<input type="submit" value="Добавить канал" />
	</form>   
