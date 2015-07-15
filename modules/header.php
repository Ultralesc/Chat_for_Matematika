<header>
	<div id="upMenu">
		<ul>
			<li><a href="/">ГОЛОВНА СТОРІНКА</a></li>
			<li><a href="/Site_map">КАРТА САЙТУ</a></li>
			<li><a href="/Feedback">ЗВОРОТНІЙ ЗВ'ЯЗОК</a></li>			

<?php	
if (isset($_SESSION['access'])){
   if ($_SESSION['access'] == 'yes')	{	
		echo 	'<li><a href="/AddNews">ДОДАТИ НОВИНУ</a></li>';
		echo 	'<li><a href="/Admin">АДМІНКА</a></li>';
		echo 	'<li><a href="/Exit">ВИХІД</a></li>';
	}
}else {
	echo 	'<li><a href="/Login">ВХІД</a></li>';
}
?>

		</ul>
	</div>
</header>



