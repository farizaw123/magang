<body>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>                
            </tr>
        </thead>
        <?php
        include "database.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM siswa');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>