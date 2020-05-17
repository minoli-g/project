<?php

// Core Initialization
require_once 'core/init.php';

// Header
include 'includes/header1.php';

echo "<div class='mainnotfixed'>";

$user = new User();

if (!$user->isLoggedIn()) {
  Redirect::to('index.php');
}
if (Input::exists()) {
  if (Token::check(Input::get('token'))) {
    //echo "Ok!";
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
      'password_current' => array(
        'required' => true,
        'min' => 6
      ),
      'password_new' => array(
        'required' => true,
        'min' => 6
      ),
      'password_new_again' => array(
        'required' => true,
        'min' => 6,
        'matches' => 'password_new'
      )
    ));
    if($validation->passed()) {
      if (Hash::make(Input::get('password_current')) !== $user->data()->password) {
        echo 'Your current password is wrong.';
      } else {
        $user->update(array(
          'password' => Hash::make(Input::get('password_new')),
        ));

        Session::flash('home', 'Your password has been changed.');
        Redirect::to('index.php');


      }
    } else {
      foreach($validation->errors() as $error) {
        echo $error, '<br>';
    }
  }
}
}
?>



<form class="" action="" method="post">
  <div class="field form-group">
    <label for="password_current">Current password</label>
    <input type="password" class="form-control" name="password_current" value="" id="password_current" autocomplete="off">
  </div>

  <div class="field form-group">
    <label for="password_new">New password</label>
    <input type="password" class="form-control" name="password_new" value="" id="password_new" autocomplete="off">
  </div>

  <div class="field form-group">
    <label for="password_new_again">New password again</label>
    <input type="password" class="form-control" name="password_new_again" value="" id="password_new_again" autocomplete="off">
  </div>
  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
  <input type="submit" value="Change">

</form>

<?php
  echo "</div> <!-- //maincontainer -->";
  include 'includes/footer.php';
?>
