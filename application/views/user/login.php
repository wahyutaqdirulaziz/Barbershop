<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('admin/template/head');
?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><img src="gambar/tes.png" width="100"  height="" alt=""><b>Login</b> </i>Babershop</a>
  </div>
  <center>
 
  </center><br>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login User</p>

    <form action="<?php base_url() ?>login_user/aksi" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
    <!-- /.social-auth-links -->

    

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
