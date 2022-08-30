<?php
session_start();
if (!isset($_SESSION["login"])) {

  header("location: login.php");
  exit;
}

require 'function.php';

$sekolah = query("SELECT * FROM tb_sekolah");

include('fragment/header.php');
?>
<div class="main">
  <div class="content">
    <br>
    <h2 class="h2sekolah" align="center">Profil SMKN 4 Negri Payakumbuh</h2>
    <div class="tablesekolah" align="center">
      <table border="0" cellpadding="8" cellspacing="1" width="800">
        <tr align="center" bgcolor="#1fe5d5">
          <td width="200">Data Sekolah </td>
          <td width="400">Keterangan</td>
        </tr>
        <?php foreach ($sekolah as $row) : ?>
          <tr>
            <td bgcolor="#ddd">Nama Sekolah</td>
            <td bgcolor="#ddd"><?= $row['nama']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#eee">NPSN</td>
            <td bgcolor="#eee"><?= $row['npsn']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#ddd">Alamat</td>
            <td bgcolor="#ddd"><?= $row['alamat']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#eee">Kodepos</td>
            <td bgcolor="#eee"><?= $row['kodepos']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#ddd">Kab. / Kota </td>
            <td bgcolor="#ddd"><?= $row['kota']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#eee">Provinsi </td>
            <td bgcolor="#eee"><?= $row['provinsi']; ?></td>
          </tr>
          <td bgcolor="#ddd">Status Sekolah </td>
          <td bgcolor="#ddd"><?= $row['statussekolah']; ?></td>
          <tr>
            <td bgcolor="#eee">Waktu Penyelenggaraan </td>
            <td bgcolor="#eee"><?= $row['waktu_p']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#ddd">Jenjang Pendidikan </td>
            <td bgcolor="#ddd"><?= $row['jenjang_pendidikan']; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>

    </div>
  </div>
  <div class="clear"></div>
  <?php

  include('fragment/footer.php');

  ?>
  </body>

  </html>