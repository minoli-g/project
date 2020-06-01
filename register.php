<?php
require_once 'core/init.php';



// Header

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}


//var_dump(Token::check(Input::get('token')));

  if (Input::exists()) {
    if (Token::check(Input::get('token'))) {

      $validate = new Validate();
      $validation = $validate->check($_POST, array(
        // 'firstname' => array(
        //   'required' => true,
        //   'min' =>3
        // ),
        // 'lastname' => array(
        //   'required' => true,
        //   'min' =>3
        // ),

        // 'username' => array(
        //   'required' => true,
        //   'min' => 2,
        //   'max' => 20,
        //   'unique' => 'users'
        // ),
        // 'nic' => array(
        //   'required' => true,
        //   'min' => 9,
        //   'max' =>12
        // ),
        // 'bday' => array(
        //   'required' => true,

        // ),
        // 'email' => array(
        //   'required' => true
        // )
      ));

      if ($validation->passed()) {
          $user1 = new staff();
          try {


            $user1->create('users',array(
              'username' => Input::get('username'),
              'firstname' => Input::get('firstname'),
              'lastname' => Input::get('lastname'),
              'address' => Input::get('address'),
              'phone1' => Input::get('phone1'),
              'phone2' => Input::get('phone2'),
              'address' => Input::get('address'),
              'email' => Input::get('email'),
              'nic' => Input::get('nic'),
              'bday' => Input::get('bday'),
              'password' => Hash::make(Input::get('password')),
              'name' => Input::get('name'),
              'joined' => date('Y-m-d H:i:s'),
              'group' => Input::get('type')
              //'' => '',
            ));

            Session::flash('home', 'You have been registered and can now log in!');
            // header('Location: index1.php');
            Redirect::to('index1.php'); // 'index.php'

          }
           catch (Exception $e) {
            die($e->getMessage());
          }

      } else {
        //print_r($validation->errors());
        foreach ($validation->errors() as $error) {
          echo $error, '<br>';
        }
      }

    } // fim segundo if
  } // fim primeiro if
  include 'includes/header1.php';
?>
echo "<div class='mainnotfixed'>";
<!--form class="" action="" method="post">

    <input type="radio" name="type" value="4">Receptionist</input>
    <input type="radio" name="type" value="3">Physiotherepist</input><br>
 
    <label for="firstname">First Name</label><br>
    <input type="text" name="firstname" value="<?php echo escape(Input::get('firstname')); ?>" id="firstname" autocomplete="off"><br>

    <label for="lastname">Last Name</label><br>
    <input type="text"  name="lastname" value="<?php echo escape(Input::get('lastname')); ?>" id="lastname" autocomplete="off"><br>

    <label for="username">User Name</label><br>
    <input type="text" name="username" value="<?php echo escape(Input::get('username')); ?>" id="username" autocomplete="off"><br>

    <label for="nic">NIC NO</label><br>
    <input type="number" name="nic" value="<?php echo escape(Input::get('nic')); ?>" id="address" autocomplete="off"><br>

    <label for="bday">Birth Day</label><br>
    <input type="date" name="bday" value="<?php echo escape(Input::get('bday')); ?>" id="bday" autocomplete="off"><br>
   
    <label for="phone1">Contact No</label><br>
    <input type="tel" name="phone1" value="<?php echo escape(Input::get('phone1')); ?>" id="address" autocomplete="off"><br>

    <label for="tel">Contact No</label><br>
    <input type="number" name="phone2" value="<?php echo escape(Input::get('phone2')); ?>" id="address" autocomplete="off"><br>

    <label for="address">Address</label><br>
    <input type="text"  name="address" value="<?php echo escape(Input::get('address')); ?>" id="address" autocomplete="off"><br>

    <label for="email">Email</label><br>
    <input type="email"  name="email" value="<?php echo escape(Input::get('email')); ?>" id="address" autocomplete="off"><br>

    <input type="password"  name="password" value='' id="password" autocomplete="off"><br>  //value=password_generate(8)
  
  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"><br>
  <input type="submit" class="btn btn-success" value="Register"><br>

</form>

<!-- <?php
  // echo "</div> <!-- //maincontainer -->";
  // include 'includes/footer.php';
?> -->