<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
    include 'Database1.php';

     ?>
    <h3>Tambah Data User</h3>
    <form action="proses1.php?aksi=tambah" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="text" name="usia"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>