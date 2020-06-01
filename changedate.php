<?php
require_once 'core/init.php';
include 'includes/header1.php';


// require_once 'core/init.php';
// include 'includes/header1.php';
// Core Initialization
// require_once 'core/init.php';
// include 'includes/header1.php';
// $p='changedate/canceldate';
// include 'changedate/canceldate.php';
if (Input::exists()) {
    // if (Token::check(Input::get('token'))) {
        if(Input::get('chg')){
            include 'changedate/canceldate.php';
        }
        if(Input::get('cancel')){
            echo 'jiio';
            include 'changedate/abledates.php';
        }
        if(Input::get('able')){
            include 'changedate/anotherphysio.php';
        }
        else{
            include 'changedate/exit.php';
        }
    // }
}
?>
<!--div class='mainnotfixed'>
<form class="" action="" method="post">
 
 <label for="subject">Subject</label><br>
 <input type="text" name="subject" value="<?php echo escape(Input::get('subject')); ?>" id="firstname" autocomplete="off"><br>

 <label for="message">Message</label><br>
 <input type="text"  name="message" value="<?php echo escape(Input::get('message')); ?>" id="lastname" autocomplete="off"><br>

<input type="hidden" name="token" value="<?php echo Token::generate(); ?>"><br>
<input type="submit" name='chg'  class="btn btn-success" value="Register"><br>

</form>
</div-->
