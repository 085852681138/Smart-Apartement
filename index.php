<?php 
    require_once "controller/connect.php";
    require_once "controller/fungsi.php";
    
$siswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sekolah</title>
</head>
<body>
    <h1 class="judul">Daftar Siswa SMKN 1 Dlanggu</h1>
    <div class="container">
        <table border=1 cellpadding=10 cellspacing=0 >
            <tr>
                <th class="id">ID</th>
                <th class="nama">Nama</th>
                <th class="jk">Jenis Kelamin</th>
                <th class="alamat">Alamat</th>
                <th class="ubah" colspan="3">CRUD</th>
            </tr>
            
            <!-- Mengambil Data secara Looping -->
          <?php $i= 1; ?>
            <?php foreach ( $siswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["jenis_kelamin"]; ?></td>
                    <td><?= $ro["alamat"]; ?></td>
                    <td >
                        <a href="view/insert.php">
                            <input type="button" value="Tambah" >
                        </a>
                    </td>
                    <td>
                        <a href="view/update.phpid=<?= $row["id"]; ?>" 
          onclick="return confirm('yakin?');" ></a>
                    </td>
                    <td>
                        <a href="view/delete.php?id=<?= $row["id"]; ?>" 
          onclick="return confirm('yakin?');">Hapus
                        </a>
                    </td>
                </tr>
              <?php $i++; ?>
            <?php endforeach ; ?>
        </table>
    </div>
</body>
</html>