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
    <div class = "content">
        <div class = "main-panel">
    <div class="container">
        <h2>Data User</h2>
        <p>Anda dapat mengelola data user</p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>Tanggal lahir</th>
                    <th>Agama</th>
                    <th>Kode Jurusan</th>
                    
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
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>