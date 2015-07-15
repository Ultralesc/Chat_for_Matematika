
	<?php if (isset($errorLogin)) echo $errorLogin; ?>
<div class="col-lg-5  col-md-6 col-sm-8 col-xs-12">
	<form class="form-horizontal" role="form" action="/login" method="post" enctype="multipart/form-data">
		<h1>АВТОРИЗАЦІЯ</h1>
		<div class="form-group ">
			<label for="inputLogin" class="col-sm-3 control-label">Логин</label>
			<div class="col-sm-9">
				<input type="text" name="login" class="form-control" id="inputLogin" placeholder="Логин">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
			<div class="col-sm-9">
				<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Пароль">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Войти</button>
			</div>
		</div>
	</form>	
</div>