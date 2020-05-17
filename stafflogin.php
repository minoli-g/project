<?php
require_once 'core/init.php';

if (Input::exists()) {

  if(Token::check(Input::get('token'))) {

    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'username' => array('required' => true),
      'password' => array('required' => true)
    ));
    if($validation->passed()) {
      //echo "Passou!";
      $user = new User();
      $remember = (Input::get('remember') === 'on') ? true : false;
      $login = $user->login(Input::get('username'), Input::get('password'), $remember);

      if ($login) {
        header('Location: prof.php');
      } else {
        echo "<p class='label label-danger'>Sorry, logging in failed.</p><br><br>";
      }

    } else {
      foreach($validation->errors() as $error) {
        echo $error, '<br>';
      }
    }

  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login-Physiotheraphist
        </title>
        <a href="index1.php">HOME</a>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="images/pro1.png" class="image">
            <h3>Login Here</h3>
        <form method="POST" action="">
        <label>User Name : </label>
        <input type="text" name="username" id="username" autocomplete="off" required placeholder="Enter User Name"><br>
        <label>Password : </label>
        <input type="password" class="form-control" name="password" id="password" autocomplete="off"><br>
        <label for="remember" style="font-size:13px">Remember Me</label>
        <input type="checkbox" name="remember" id="remember">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <button type="submit" value="Login" name="">Log In</button><br><br>
        <a href="#">Lost your password?</a>
    </form></div>
    </body>
</html>

