<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>

<style>
  /* Center the login box */
  .login-page {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  /* Style the login box */
  .login-box {
    background-color: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 400px;
  }

  .login-logo {
    text-align: center;
    margin-bottom: 20px;
    font-size: 22px;
    font-weight: bold;
    color: #2c3e50;
  }

  .login-box-msg {
    text-align: center;
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 500;
    color: #444;
  }

  .btn-primary {
    background-color: #3498db;
    border-color: #2980b9;
  }

  .btn-primary:hover {
    background-color: #2980b9;
  }

  .callout.callout-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
    margin-top: 20px;
    padding: 10px;
    border-radius: 5px;
  }
</style>

<body class="hold-transition login-page" style="background: url('https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed; background-size: cover;">

  <div class="login-box">
    <div class="login-logo">
      College Library Management System
    </div>

    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php" method="POST">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Input Username" required autofocus>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Input Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">
              <i class="fa fa-sign-in"></i> Sign In
            </button>
          </div>
        </div>
      </form>

      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='callout callout-danger text-center mt20'>
              <p>".$_SESSION['error']."</p> 
            </div>
          ";
          unset($_SESSION['error']);
        }
      ?>
    </div>
  </div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
