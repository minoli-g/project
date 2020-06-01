<?php

require_once 'core/init.php';
include 'includes/header1.php';
echo "<div class='mainnotfixed'>";
$user = new User();
$data=$user->data();
if(!$user->isLoggedIn()) {
  Redirect::to('index.php');
}

if(Input::exists()) {
  if(Token::check(Input::get('token'))) {
    // $validate = new Validate();
    // $validation = $validate->check($_POST, array(
    //   'firstname' => array(
    //     'required' => true,
    //     'min' => 2,
    //     'max' => 50
    //   )
    // ));
    // if($validation->passed()) {
      try {
        $user->update(array(
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'address' => Input::get('address'),
            'phone1' => Input::get('phone1'),
            'phone2' => Input::get('phone2'),
            'email' => Input::get('email'),
            'bday' => Input::get('bday')
        ));
        Session::flash('home', 'Your details have been updated.');
        Redirect::to('index1.php');
      } catch (Exception $e) {
        die($e->getMessage());
      }

    // } else {
    //   foreach($validation->errors() as $error) {
    //     echo $error, '<br>';
    //   }
    // }
  }
}
?>

<!--link href="css/editinfo.css" rel="stylesheet" type="text/css">
<div id="mainnotfixed">
    <form action="" method="post">
        <fieldset>
            <legend>Edit Profile Information</legend>

            <div class="column">
                <div>
                    <div class="label"><label for="firstname">First Name</label></div>
                    <input type="text" name="firstname" value="<?php echo escape(Input::get('firstname')); ?>"id="firstname" autocomplete="off" />
                </div>
                <div><div class="label"> <label for="lastname">Last Name</label>
                </div>
                    <input type="text" name="lastname" value="<?php echo escape(Input::get('lastname')); ?>" id="lastname" autocomplete="off" />
                </div>
                <div class="label"> <label for="bday">Birthdate</label> </div>
                <div><input type="date" name="bday" value="<?php echo escape(Input::get('bday')); ?>" id="bday" autocomplete="off" />
                </div>
                <div><div class="label">
                        <label for="address">Address</label>
                    </div>
                    <input type="text" name="address" value="<?php echo escape(Input::get('address')); ?>" id="address" autocomplete="off" />
                </div>
            </div>
            <div class="column">
               <div>
                    <div class="label">
                        <label for="email">Email</label>
                    </div>
                    <input type="email" name="email" value="<?php echo escape(Input::get('email')); ?>" id="email" autocomplete="off" />
                    <br><br><br>
                </div>
                <div>
                    <div class="label">
                        <label for="phone1">Contact No</label>
                    </div>
                    <input type="number" name="phone1" value="<?php echo escape(Input::get('phone1')); ?>" id="phone1" autocomplete="off" />
                    <br><br><br>
                </div>
                <div>
                    <div class="label">
                        <label for="phone2">Contact No</label>
                    </div>
                    <input type="number" name="phone2" value="<?php echo escape(Input::get('phone1')); ?>" id="phone2" autocomplete="off" />
                    <br><br><br><br>
                </div>
            </div>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <input type="submit" name="submit" value="Update" autocomplete="off" />
        </fieldset>
    </form>
</div-->

<?php
  echo "</div> <!-- //maincontainer -->";
  include 'includes/footer.php';
?>