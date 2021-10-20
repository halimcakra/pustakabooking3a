<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Crud dengan CodeIgniter</title>
</head>
<center>
    <h1> Crud dengan CodeIgniter </h1>
    <h3> Form Edit Data </h3>
</center>
<?php foreach ($user as $u) { ?>
    <form action="<?php echo base_url(), 'crud/update'; ?>" method="post">
        <table style="margin: 20px auto;">
            <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
            </tr>
            <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
            </tr>
            <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
            </tr>
            <tr>
                    <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
<?php } ?>
</html>