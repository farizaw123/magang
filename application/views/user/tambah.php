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
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">
                <form action="<?= base_url() ?>index.php/user/simpanData" method="post">
                    <div class="form-group">
                        <label for="exampleInputnis">Nis</label>
                        <input type="text" name="nis" class="form-control" id="exampleInputnis" placeholder="Enter Nis">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputnama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputalamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputalamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnotelp">No Telp</label>
                        <input type="text" name="no_telp" class="form-control" id="exampleInputnotelp" placeholder="Nomor telepon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtanggallahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="exampleInputtanggallahir" placeholder="TAnggal lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputagama">Agama</label>
                        <input type="text" name="agama" class="form-control" id="exampleInputagama" placeholder="Agama">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>