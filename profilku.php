<?php
session_start();
if (!isset($_SESSION["login"])) {

  header("location: login.php");
  exit;
}

require 'function.php';

$data = query("SELECT * FROM profil");

include('fragment/header.php');
?>
<div class="main">
  <div class="content">
    <h1 class="bio" align="center">PROFILKU</h1>
    <div class="border">
      <div class="tableprofil" align="center">
        <table border="0" cellpadding="7" cellspacing="1" align="center">
          <tr align="center" bgcolor="#ff0000">
            <td width="200">Data Diri</td>
            <td width="400">Keterangan</td>
            <td width="200">Foto</td>
          </tr>
          <?php foreach ($data as $row) : ?>
            <tr>
              <td>Nama</td>
              <td><?= $row['nama']; ?></td>
              <td rowspan="8"><img src="" width="300px" height="300px"></td>
            </tr>
            <td>Tempat/Tanggal lahir</td>
            <td><?= $row['tempatlahir']; ?> / <?= $row['tanggal_lahir']; ?></td>
            <tr>
              <td>Alamat</td>
              <td><?= $row['alamat']; ?></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td><?= $row['agama']; ?></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td><?= $row['jk']; ?></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td><?= $row['pekerjaan']; ?></td>
            </tr>
            <td>cita-cita</td>
            <td><?= $row['cita_cita']; ?></td>
          <?php endforeach; ?>
        </table>
      </div>

    </div>
  </div>
</div>
<?php

include('fragment/footer.php');

?>

</body>

</html>