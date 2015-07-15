<div id="forerror"></div>
<div id="messages"></div> </br>    
<form id="chatForm" action="javascript:send();">
	<label>выбери канал</label>
	<select id ="chanel">
		<?php 
			$result =$db->query("SELECT * FROM chanels ");		//выборка всех каналов
			while($row = mysqli_fetch_assoc($result)) {
				echo '<option value='.$row['id'].'>'.$row['nameChanel'].'</option>';
			}	
		?>
	</select>
	<select id ="user" style="display:none">
		<?php 
			$result =$db->query("SELECT * FROM users ");		//выборка всех каналов
			while($row = mysqli_fetch_assoc($result)) {
				if ($row['id']==$_SESSION['id']) continue;
				echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
			}	
		?>
	</select></br>
	</br>
	<input type="text" id="mess_to_send"><input type="submit" value="Отправить" />
</form>
<script type="text/javascript">
	$(document).ready(function() {
		load_messes($( "select").val());
		setInterval(function() {
			load_messes($( "select").val());
		}, 3000);
	});
	$(document).ready(function() { 
		$( "#chanel" ).change(function() {
			load_messes($( "select").val());
			if ($("#chanel").val() == '15' ) {
				$( "#user" ).attr('style', "");
			}	else {
				$( "#user" ).attr('style', "display:none");
			}
		});
	});
</script>
