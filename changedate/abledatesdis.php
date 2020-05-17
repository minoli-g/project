<?php
require_once 'core/init.php';
echo '<div class="mainnotfixed">';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        echo Input::get('to');
        $id=(new User(57))->data()->id;
        $from=Input::get('from');
        $to=Input::get('to');
        while (strtotime($from) <= strtotime($to)) {
            $arr=$user->getcount('appoinments','physio','=',$id,'next','=',$from);
            if($arr<8){
            echo '<form class="" action="" method="post" name="able">
                 <input type="radio" id="male" name="gender" value="{$from}">
                <label for="male">'.$from.'</label><br>
                <input type="submit" class="btn btn-success" name="able" value="Search">
                </form>';
            }
            $from = date ("Y-m-d", strtotime("+1 day", strtotime($from)));
        } 
    }
}
?>