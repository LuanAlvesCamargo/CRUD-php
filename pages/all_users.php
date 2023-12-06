<?php include_once('inc/header.php'); ?>
<?php include_once('config/config.php'); ?>
<div class="conatainer-fluid">
  <div class="container">
    <h3 class="text-center text-white">All Users</h3>
    <a href="pages/add_new_user.php" class="btn btn-info mb-2 pull-right">Adicionar novo</a>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>Sno<?php $sno = '1'; ?></th>
          <th>Primeiro nome</th>
          <th>Sobrenome</th>
          <th>Email</th>
          <th>Imagem de perfil</th>
          <th>Ação</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $get_all_users = "SELECT * FROM user";
        $res = mysqli_query($conn, $get_all_users);
        if (mysqli_num_rows($res) > 0) {
          while ($rs = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
              <td><?php echo $sno++; ?></td>
              <td><?php echo $rs['primeiro_nome']; ?></td>
              <td><?php echo $rs['sobrenome']; ?></td>
              <td> <?php echo $rs['email']; ?></td>
              <td> <?php echo $rs['profile_picture']; ?></td>
              <td><a href="#">Visualizar</a></td>
            </tr>


          <?php

          }
        } else {
          ?>
          <tr>
            <td colspan="6" style="text-align: center;">Nenhum dado encontrado</td>
          </tr>
        <?php
        }


        ?>


      </tbody>
    </table>
    <?php include_once('inc/footer.php'); ?>