<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('admin/template/head');
$this->load->view('user/template/head');
$this->load->view('user/template/nav');
?>

<body class="hold-transition login-page">
<div class="col-md-6 col-md-offset-3">
  <div class="login-logo">
    <a href="#"><img src="gambar/tes.png" width="100"  height="" alt=""><b>Daftar Akun</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form action="<?php base_url() ?>" method="post">
      <div class="form-group has-feedback">
	  <label for="">Nama Lengkap:</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
      </div>
      <div class="form-group has-feedback">
	  <label for="">Jenis Kelamin:</label>
        <input type="text" class="form-control" name="jk" placeholder="Masukan Jenis Kelamin">
      </div>
      <div class="form-group has-feedback">
	  <label for="">Nomor Telepon:</label>
        <input type="number" class="form-control" name="no" placeholder="Masukan Nomor Telepon">
      </div>
	  <div class="form-group has-feedback">
	  <label for="">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Masukan email">
      </div>
	  <div class="form-group has-feedback">
	  <label for="">Username:</label>
        <input type="text" class="form-control" name="username" placeholder="Masukan Username">
      </div>
	  <div class="form-group has-feedback">
	  <label for="">Password:</label>
        <input type="text" class="form-control" name="password" placeholder="Masukan Password">
      </div>
     
     
     
     
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
				<BR>
				
        <!-- /.col -->
      </div>
    </form>

   
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
  <br>
<BR>
</div>
<?php $this->load->view('user/template/foot') ?>
<script src="<?php base_url()?>asstes/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php base_url()?>asstes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php base_url()?>asstes/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
