<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud dengan CodeIgniter</title>
</head>
<body>
    <center>
        <h1>CRUD dengan CodeIgniter</h1>
        <h1>Form Tambah Data Baru</h1>
    </center>
    <form action="<?php echo base_url(), 'crud/tambah_aksi'; ?>" method="post">
        <table style="margin: 20px auto;">
            <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" id=""></td>
            </tr>
            <tr>
                    <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>