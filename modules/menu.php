<ul class="nav nav-tabs">
	<li><a href="/">Чат</a></li>
	<?php		
		if (isset($_SESSION['status']) && $_SESSION['status']=='Admin') {
			echo '<li><a href="/editChanels">Редактор каналов</a></li>';
			echo '<li><a href="/editMessage">Редактор сообщений</a></li>';
		}
		if (!isset($_SESSION['status']))
			echo '<li><a href="/login">Авторизация</a></li>';
		if (isset($_SESSION['status']))	{
			echo '<li><a href="/exit">Выход</a></li>';
			echo '<a href="/" class="navbar-brand">Привет '.$_SESSION['name'].'</a>';
		}
	?>
</ul>

