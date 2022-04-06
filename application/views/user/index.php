<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- <div class="container mt-5">
     <h2>Data User</h2>
     <p>Anda dapat mengelola data user</p>
     <table class="table table-striped border" id="listUserTable">
        <thead>
           <tr>
              <th>No</th>
              <th>Username</th>
              <th>Email</th>
              <th style="text-align: right;">Action</th>
          </tr>
         </thead>
      <tbody id="listUser"> -->
    <!-- Untuk menampilkan datanya, menggunakan JQuery + AJAX -->
      <!-- </tbody>
    </table>
    <div><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addUserModal"><span class="fa fa-plus"></span> Add New</a></div><br>
    </div>   -->

    <div class = "content">
        <div class = "main-panel">

    <div class="container">
        <h2>Data User</h2>
        <p style="font-size: 20px;">Anda dapat mengelola data user</p>
        <!-- <button href= "" type="button" class="btn btn-outline-warning">Insert</button> -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>Tanggal lahir</th>
                    <th>Agama</th>
                    <th>Id Jurusan</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($siswa as $u) :
                    ?>
                    <tr>
                        <td><?= $u['nis'] ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['alamat'] ?></td>
                        <td><?= $u['no_telp'] ?></td>
                        <td><?= $u['tgl_lahir'] ?></td>
                        <td><?= $u['agama'] ?></td>
                        <td><?= $u['id_jurusan'] ?></td>
                        <td><a href="<?= base_url() ?>user/hapus/<?= $u['nis'] ?>" class="btn btn-danger">Hapus</a>
                        
                        <a href="" class="btn btn-primary">Ubah</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <a href="<?= base_url() ?>index.php/user/formTambah" class="btn btn-primary">tambah data</a>
    </div>
</body>
</html>