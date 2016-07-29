<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>BAPEDALDA</title>

   
   <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

   
     <link href="<?php echo base_url(); ?>assets/css/signin.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

      <?php echo form_open('auth/login', array('class'=>'form-signin')); ?>
        <h2 class="form-signin-heading">Silahkan Login</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username"  required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
      </form>

    </div>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
