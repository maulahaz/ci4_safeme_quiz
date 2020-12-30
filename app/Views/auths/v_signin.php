<?php  
  $frmSigninAction = base_url('auths/signin_exe');
  $frmSignupAction = base_url('auths/signup');
  $frmForgotAction = base_url('auths/forgot');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ;?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>/t_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>/t_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>/t_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url(); ?>/t_gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>/t_gentelella/build/css/custom.min.css" rel="stylesheet">
    <style>
      .errors{
        color: red;
      }
      .errors li{
        list-style-type: none;
      }
    </style>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?=$frmSigninAction; ?>" method="post">
              <h1>Sign in</h1>
              <?php if(isset($flashMsg)): ;?>
                <?= $flashMsg ;?>
              <?php endif ;?>
              <?php if(isset($errorMsg)): ;?>
                <?= $errorMsg ;?>
                <!-- <?//implode('--', $errorMsg) ;?> -->

              <?php endif ;?>
              <div>
                <input type="text" class="form-control" placeholder="User ID" name="usr_id" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="usr_pwd"required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary btn-sm" value="Save" id="btn_create" name="btn_create">Sign in</button>
                <!-- <button type="submit" class="btn btn-secondary btn-sm" value="Cancel" id="btn_cancel" name="btn_cancel">Cancel</button> -->
              </div>
              <div>
                <a href="<?=$frmForgotAction; ?>">Lost your password ?</a>
              </div>

              <div class="clearfix"></div>  

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
                  <p>SafeMe Apps by MHz, made from Gentelella Alela admin template.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="<?=$frmSignupAction; ?>" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="User ID" name="usr_id" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="usr_pwd" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="usr_pwd2" required="" />
              </div>
              <div>
                <!-- <a class="btn btn-default submit" href="<?=$frmSignupAction; ?>">Submit</a> -->
                <button type="submit" class="btn btn-primary btn-sm" value="Submit" id="btn_submit" name="btn_submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>SafeMe Apps by MHz, made from Gentelella Alela admin template.</p>
                  <!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
                  <!-- <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p> -->
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
