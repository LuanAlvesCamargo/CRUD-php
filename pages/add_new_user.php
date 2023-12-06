<?php include_once('../inc/header.php'); ?>
<?php include_once('../config/config.php'); ?>
<div class="container-fluid" id="mycontainer">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 mx-auto" id="myform">
				<form action="insert_user.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Primeiro nome:</label>
						<input type="text" name="primeiro_nome" class="form-control" placeholder="Digite o primeiro nome">
					</div>
					<div class="form-group">
						<label>Sobrenome:</label>
						<input type="text" name="sobrenome" class="form-control" placeholder="Digite sobrenome">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Digite Email">
					</div>
					<div class="form-group">
						<label>Imagem de perfil:</label>
						<input type="file" name="foto_do_perfil" class="form-control" accept="image/x-png,image/jpeg" value="">
					</div>
					<input type="submit" name="submit" class="btn btn-info">
				</form>

			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<?php include_once('../inc/footer.php'); ?>