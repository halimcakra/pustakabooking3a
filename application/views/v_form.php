<!DOCTYPE html>
<html>

<head>
    <title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>

<body>
    <form action="<?=base_url('form/aksi');?>"method="post">
           <h1>Membuat Form Validation dengan CodeIgniter | MalasNgoding.com</h1>
           <?php echo validation_errors(); ?>
           <?php echo form_open('form/aksi'); ?>
           <label>Nama</label><br />
           <input type="text"name="nama"><br />
           <?php echo form_error('nama'); ?>
           <label>Email</label><br />
           <input type="text"name="email"><br />
           <?php echo form_error('email'); ?>
           <label>Konfirmasi Email</label><br />
           <input type="text"name="konfir_email"><br />
           <?php echo form_error('konfir_email'); ?>
           <input type="submit" value="Simpan">
    </form>
</body>

</html>