<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
		include 'modules/config.php';
		session_start();
		$db =  new mysqli(DB_LOCATION, DB_USER, DB_PASSWORD, DB_NAME);
		$db->query("SET NAMES UTF8");
			if (mysqli_connect_errno()) {
   			printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   			exit;
		}
		$modeleContent='modules/chat';
		include 'modules/content.php';
		include $modeleContent.'.php';		
?>
    <!DOCTYPE HTML>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/base.css" rel="stylesheet" type="text/css">
<script src="/js/min.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<title>Test chat</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php include 'modules/menu.php';?>		
			<div class="col-lg-3  col-md-3 col-sm-2 col-xs-0">
			</div>
			<div class="col-lg-6  col-md-6 col-sm-8 col-xs-12">
			<?php include $modeleContent.'.tpl.php'; ?>
			</div>
			<div class="col-lg-3  col-md-3 col-sm-2 col-xs-0">
			</div>
		</div>
	</div>	
	<?php include 'modules/footer.php';?>
    <?php $db->close(); ?>
	</body>
</html>