<?php
require_once 'core/init.php';

  if (Input::exists()) {
    if (Token::check(Input::get('token'))) {

      $validate = new Validate();
      $validation = $validate->check($_POST, array(
        'subject' => array(
          'min' =>3
        ),
        'message' => array(
          'required' => true,
          'min' =>10
        ),
      ));

      if ($validation->passed()) {
          $user = new user();
          try {
            $user->sendmsg('adminmsg',array(
              'subject' => Input::get('subject'),
              'message' => Input::get('message'),
              'userid' => $user->data()->id,
              'date' => date('Y-m-d H:i:s')
            ));

            Session::flash('home', 'Your message have been send');
            header('Location: index1.php');
          }
           catch (Exception $e) {
            die($e->getMessage());
          }

      } else {
        foreach ($validation->errors() as $error) {
          echo $error, '<br>';
        }
      }
    }
  }
  include 'includes/header1.php';
?>
<!--div class='mainnotfixed'>
<label for="topic">Send Message to Admin</label><br>
<form class="" action="" method="post">
 
    <label for="subject">Subject</label><br>
    <input type="text" name="subject" value="<?php echo escape(Input::get('subject')); ?>" id="firstname" autocomplete="off"><br>

    <label for="message">Message</label><br>
    <input type="text"  name="message" value="<?php echo escape(Input::get('message')); ?>" id="lastname" autocomplete="off"><br>
  
  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"><br>
  <input type="submit" class="btn btn-success" value="Register"><br>

</form-->

<!-- <?php
  // echo "</div> <!-- //maincontainer -->";
  // include 'includes/footer.php';
?> -->