<?php
  include 'koneksi.php';
$query = "SELECT*FROM tbl_mhs;";
$sql = mysqli_query($conn,$query);
$no = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--bootstraps-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>CRUD</title>
     <!--font-->
     <link rel="stylesheet" href="font/css/font-awesome.min.css">
    
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="logo unesa.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Data Mahasiswa
          </a>
        </div>
      </nav>
      <div class="container-fluid">
        <H1 class="mt-3">Data Mahasiswa JTIF UNESA.</H1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data master mahasiswa JTIF UNESA</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Aplikasi CRUD <cite title="Source Title"></cite>
        </figcaption>
      </figure>
      <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-user-plus" aria-hidden="true"></i>
        Tambah Data
      </a>
        <div class="table-responsive">
            <table class="table align-middle table-hover" table-border>
            <thead>
                <tr>
                <th><center>#</center></th>
                <th>NIM</th>
                 <th>Nama Mahasiswa</th>
                 <th>Jenis Kelamin</th>
                 <th>Alamat</th>
                 <th>Prodi</th>
                 <th>Foto</th>
                 <th>Email</th>
                 <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($result= mysqli_fetch_assoc($sql)){
            ?>
                <tr>
                <td><center>
                  <?php echo ++$no;?>.
                </center></td>
                <td><?php echo $result['NIM'];?></td>
                <td><?php echo $result['Nama_Mahasiswa'];?></td>
                <td><?php echo $result['Jenis_Kelamin'];?></td>
                <td><?php echo $result['Alamat'];?></td>
                <td><?php echo $result['Prodi'];?></td>
                <td>
                    <img src = "img/<?php echo $result['Foto'];?>" style="width : 150px;">
                </td>
                <td><?php echo $result['Email'];?></td>
                <td>
                    <a href="kelola.php?ubah=<?php echo $result['id'];?>" type="button" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        Ubah
                    </a>
                    <a href="proses.php?hapus=<?php echo $result['id'];?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin meghapus data tersebut?')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Hapus
                    </a>
                </td>
            </tr>
           <?php
           }
           ?>
            </tbody>
            </table>
        </div>
      </div>
</body>
<footer>
    
</footer>
</html>