<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $SITE_TITLE; ?> | Log in</title>
  <link rel='shortcut icon' href='<?php echo $theme_link; ?>images/favicon.ico' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo $theme_link; ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $theme_link; ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $theme_link; ?>plugins/iCheck/square/blue.css">
  <?php
  $lang = trim(strtoupper($this->session->userdata('language')));
  if ($lang == strtoupper('arabic') || $lang == strtoupper('urdu')) { ?>
    <!-- RTL For arabic styles -->
    <link rel="stylesheet" href="<?php echo $theme_link; ?>bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?php echo $theme_link; ?>dist/css/AdminLTE.rtl.min.css">
  <?php } ?>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap');

    :root {
      --bg-color: #0b0f19;
      --accent-color: #f43f5e;
      --accent-glow: rgba(244, 63, 94, 0.4);
      --card-bg: rgba(17, 24, 39, 0.7);
      --text-primary: #f3f4f6;
      --text-secondary: #9ca3af;
      --border-color: rgba(255, 255, 255, 0.08);
    }

    body.custom-login {
      font-family: 'Outfit', sans-serif !important;
      background: radial-gradient(circle at center, #1e1b4b 0%, var(--bg-color) 70%) !important;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }

    /* Glow Effects */
    body.custom-login::before,
    body.custom-login::after {
      content: "";
      position: fixed;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, var(--accent-glow) 0%, transparent 70%);
      filter: blur(80px);
      opacity: .5;
      z-index: 1;
    }

    body.custom-login::before {
      top: -100px;
      left: -100px;
    }

    body.custom-login::after {
      bottom: -100px;
      right: -100px;
    }

    /* Login Box */
    .custom-login .login-box {
      position: relative;
      z-index: 10;
      width: 430px;
      margin: 5% auto;
    }

    /* Logo */

    /* Glass Card */
    .custom-login .login-box-body {
      background: rgba(17, 24, 39, 0.75);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 24px;
      padding: 40px;
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, .5);
      position: relative;
      overflow: hidden;
    }

    .custom-login .login-box-body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg,
          transparent,
          var(--accent-color),
          transparent);
    }

    /* Heading */
    .custom-login .login-box-msg {
      color: var(--text-primary);
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 25px;
    }

    /* Inputs */
    .custom-login .form-control {
      height: 50px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #fff;
    }

    .custom-login .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: 0 0 0 3px rgba(244, 63, 94, .15);
    }

    .custom-login .form-control::placeholder {
      color: #9ca3af;
    }

    /* Icons */
    .custom-login .form-control-feedback {
      color: #9ca3af;
    }

    /* Button */
    .custom-login .btn-primary {
      background: var(--accent-color) !important;
      border-color: var(--accent-color) !important;
      border-radius: 14px !important;
      height: 50px;
      font-size: 16px;
      font-weight: 600;
      transition: all .3s ease;
    }

    .custom-login .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 25px -8px var(--accent-color);
    }

    /* Links */
    .custom-login a {
      color: #a5b4fc;
      transition: .3s;
    }

    .custom-login a:hover {
      color: #fff;
      text-decoration: none;
    }

    /* Flash Messages */
    .custom-login .text-danger {
      background: rgba(244, 63, 94, .08);
      border: 1px solid rgba(244, 63, 94, .2);
      color: #ff8fa3;
      border-radius: 10px;
      padding: 10px;
      margin-bottom: 15px;
    }

    .custom-login .text-success {
      background: rgba(34, 197, 94, .08);
      border: 1px solid rgba(34, 197, 94, .2);
      color: #86efac;
      border-radius: 10px;
      padding: 10px;
      margin-bottom: 15px;
    }

    /* Demo Box */
    .custom-login .box-body {
      margin-top: 20px;
      background: rgba(17, 24, 39, .75);
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: 20px;
      padding: 20px;
      color: #fff;
      backdrop-filter: blur(20px);
    }

    /* Table */
    .custom-login .table {
      color: #fff;
    }

    .custom-login .table-bordered {
      border-color: rgba(255, 255, 255, .08);
    }

    .custom-login .table-bordered td {
      border-color: rgba(255, 255, 255, .08) !important;
    }

    /* Responsive */
    @media(max-width:480px) {

      .custom-login .login-box {
        width: 100%;
        padding: 15px;
      }

      .custom-login .login-box-body {
        padding: 25px;
      }

      .custom-login .login-logo img {
        max-width: 220px;
      }
    }

    .login-logo-inside {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    .login-logo-inside img {
      width: 110px !important;
      height: 110px !important;
      border-radius: 50%;
      object-fit: cover;
      background: #fff;
      padding: 6px;
      display: block;
      margin: auto;
    }
  </style>
</head>

<body class="hold-transition login-page custom-login">

  <!-- language -->
  <input type="hidden" id="base_url" value="<?= base_url() ?>">
  <?php $this->load->view('comman/language.php'); ?>
  <!-- language end -->

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">

      <div class="login-logo-inside">
        <img src="<?php echo base_url(); ?>theme/images/company_logo.png">
      </div>

      <p class="login-box-msg"><?= $this->lang->line('sign_in_message'); ?></p>

      <?php if ($this->session->flashdata('failed')) { ?>
        <div class="text-danger text-center">
          <?php echo $this->session->flashdata('failed'); ?>
        </div>
      <?php } ?>

      <?php if ($this->session->flashdata('success')) { ?>
        <div class="text-success text-center">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php } ?>


      <form id="login-form" action="<?php echo $base_url; ?>login/verify" method="post">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Email" id="email" name="email" autofocus><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat"><?= $this->lang->line('sign_in'); ?></button>
          </div>
        </div>
        <div class="row">
          <?php if (store_module()) { ?>
            <div class="col-xs-6 "><br>
              <a href="<?= base_url('register') ?>"><?= $this->lang->line('register'); ?></a>
            </div>
          <?php } ?>
          <div class="col-xs-6 text-right pull-right"><br>
            <a href="<?= base_url('login/forgot_password') ?>"><?= $this->lang->line('forgot_password'); ?></a>
          </div>
        </div>
      </form>
      <!--<div class="row">-->
      <!--  <div class="col-md-12 text-center">-->
      <!--    <p style='font-style: italic;'>Version <?= app_version(); ?></p>   -->
      <!--  </div>-->
      <!--</div>-->
    </div>
    <!-- /.login-box-body -->
    <?php if (demo_app()) { ?>
      <div class="box-body">
        <label>Click to Start Session!</label>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-condensed text-center">
              <tr>
                <td>admin@example.com</td>
                <td>123456</td>
                <td><button type="button" class="btn btn-info btn-block btn-flat admin">Apply</button></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <i><i class="fa fa-fw fa-info-circle text-warning"></i>Some of the features are disabled in demo and it will be reset after each hour.</i>
      </div>
    <?php } ?>


  </div>

  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo $theme_link; ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo $theme_link; ?>bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo $theme_link; ?>plugins/iCheck/icheck.min.js"></script>
  <script src="<?php echo $theme_link; ?>js/language.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <script type="text/javascript">
    $(function($) { // this script needs to be loaded on every page where an ajax POST may happen
      $.ajaxSetup({
        data: {
          '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(".admin").on("click", function(event) {
      $("input[name='email']").val("admin@example.com");
      $("input[name='pass']").val("123456");
      $("#login-form").submit();
    });
  </script>
</body>

</html>