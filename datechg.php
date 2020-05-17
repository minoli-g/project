<?php
require_once 'core/init.php';
include 'includes/header1.php';
echo '<link href="css/changeDate3.css" rel="stylesheet" type="text/css">
      <link href="css/changeDate4.css" rel="stylesheet" type="text/css">';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        if(Input::get('for1')){
            include 'changedate/canceldate.php';
        }
        if(Input::get('for2')){
            if(Input::get('for2')=='No'){
                echo 'Canceld';
            }
            else if(Input::get('for2')=='Yes'){
            echo '<div class="mainnotfixed">';
            include 'changedate/abledates.php';
            echo '</div>';}
        }
        if(Input::get('for3')){
            require_once 'core/init.php';
            echo '<div class="mainnotfixed">';
            include 'changedate/abledates.php';
            $id=(new User(57))->data()->id;
            $from=Input::get('from');
            $to=Input::get('to');
            echo '<form class="" action="" method="post" name="able">';
            while (strtotime($from) <= strtotime($to)) {
                $arr=$user->getcount('appoinments','physio','=',$id,'next','=',$from);
                if($arr<8){
                echo '<input type="radio" id="male" name="date" value="{$from}">
                    <label for="male">'.$from.'</label><br>';
                }
                $from = date ("Y-m-d", strtotime("+1 day", strtotime($from)));
                }
            echo '<input type="radio" id="male" name="date" value="none">
            <label for="male">None of Above</label><br>';
            echo '<input type="submit" class="btn btn-success" name="for4" value="Confirm">
                  </form>'; 
            echo '</div>';
            }
        if(Input::get('for4')){
            if(Input::get('date')=='none'){
            echo'<div class="mainnotfixed">
            <div id="mainnotfixed">
            <form class="" action="" method="post">
			<fieldset>
                <legend>Change Appointment Date</legend>
				<div id="textbox">
				<div id="text1">
			<h2>You have two options!</h2>
			</div></div><br><br>
			<h3>You can either select another Physiotherapist or change the period for your next appointment.</h3><br><br><br>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <button type="submit" value="change" name="for5">Change period</button>
            <button type="submit" value="another" name="for5">Another Physiotherapist</button>
            <button type="submit" value="cancel" name="for5">Cancel</button><br>
			</fieldset>
            </form>	
            </div>
            </div>';

}}
        if(Input::get('for5')){
            if(Input::get('for5')=='change'){
                echo '<div class="mainnotfixed">';
                include 'changedate/abledates.php';
                echo '</div>';}
            if(Input::get('for5')=='another'){
                echo '<div class="mainnotfixed"><div id="mainnotfixed"><form class="" action="" method="post">
                <fieldset>
                    <legend>Change Appointment Date</legend>
                    <div id="textbox">
                        <div id="text1">
                            <h3>Select your preferred date</h3>
                        </div></div><br><br>
                    <input type="date" name="to" value="" id="to" autocomplete="off" /><br><br><br>
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <button type="submit" value="confirm" name="for6">Confirm</button>
                </fieldset></form></div>';}
            if(Input::get('for5')=='cancel'){
                echo "canceled";
            }
    }}}
    ?>
