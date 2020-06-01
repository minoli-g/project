<?php
require_once 'core/init.php';
include 'includes/header1.php';
echo '<div class="mainnotfixed">';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $id=(new User(57))->data()->id;
        $from=Input::get('from');
        $to=Input::get('to');
        // echo $to;
        // echo $from;
        while (strtotime($from) <= strtotime($to)) {
            // echo "$from\n";
            $arr=$user->getcount('appoinments','physio','=',$id,'next','=',$from);
            echo $arr;
            $from = date ("Y-m-d", strtotime("+1 day", strtotime($from)));
        } 
    }
}
?>
    <!--form class="" action="" method="post">
        <label for="from">From</label><br>
        <input type="date" name="from" value="<?php echo escape(Input::get('from')); ?>" id="from"
            autocomplete="off"><br>
        <label for="to">To</label><br>
        <input type="date" name="to" value="<?php echo escape(Input::get('to')); ?>" id="to" autocomplete="off"><br>
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <input type="submit" class="btn btn-success" value="Search">
    </form>

</div-->
<?php
include 'includes/footer1.php';
?>