<?php include_once('../config/config.php');
	if (isset($_POST['submit'])) {
		$primeiro_nome = $_POST['primeiro_nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$perfil = $_ARQUIVOS['foto_do_perfil']['nome'];
		$perfil_temp = $_ARQUIVOS['foto_do_perfil']['nome_tmp'];
		$data_de_hoje = date('data') . time();
		$profile_folder = "../uploads/" . $todays_date . $profile;

		$insert = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `profile_picture`) VALUES ('" . $first_name . "','" . $last_name . "','" . $email . "','" . $profile_folder . "')";
		$res = mysqli_query($conn, $insert);
		if ($res) {
			move_uploaded_file($temp_profile, $profile_folder);

			//echo "Inserido";
			header("location:../index.php");
		} else {
			echo "fail";
		}
	}

	?>
