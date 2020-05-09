<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('admin/template/head');
$this->load->view('user/template/head');
$this->load->view('user/template/nav');
?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="gambar/tes.png" width="100"  height="" alt=""><b>Login</b> </i>Babershop</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login User</p>

    <form action="<?php base_url() ?>" method="post">
      <div class="form-group has-feedback">
			<label for="">Username:</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
       </div>
      <div class="form-group has-feedback">
			<label for="">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
       </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
        </div>
				<BR>
				
        <!-- /.col -->
      </div><BR>
			<p><center>Belum mempunyai akun silahkan!!</center></p>
				<p><center><a href="<?php base_url()  ?>daftar">Daftar</a></center></p>
    </form>

   
    <!-- /.social-auth-links -->

    
		<?php $this->load->view('user/template/foot') ?>
  </div>
  <!-- /.login-box-body -->
</div>
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
