<?php
require_once 'core/init.php';
include 'includes/header1.php';
$user=new User();
    $data=$user->data();
        $from=$data->joined;
        $to=date("Y-m-d");
        global $arr;
        $arr=$user->search('adminmsg','date','>',$from,'date','<',$to);
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $user=new User();
        $from=Input::get('from');
        $to=Input::get('to');
        global $arr;
        $arr=$user->search('adminmsg','date','>',$from,'date','<',$to);
    }
}
?>
<!--style>
table {
  border-collapse: collapse;
  width: 90%;
  
}

th {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  background-color:skyblue;
  color:white;
  
}
td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  font-size: 13px;
}
tr:hover {
background-color:#f5f5f5;
}
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 12px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<div class="mainnotfixed2">
    <form class="" action="" method="post">
    <br><br>
        <label for="from">From</label>
        <input type="date" name="from" value="<?php echo escape(Input::get('from')); ?>" id="from"
            autocomplete="off">
        <label for="to">To</label>
        <input type="date" name="to" value="<?php echo escape(Input::get('to')); ?>" id="to"
            autocomplete="off">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <input type="submit" class="btn btn-success" value="Search">
    </form>
    <br><br>
    <table style="border:0px ;margin-left:auto;margin-right:auto;">
        <tr>
            <th style="width:20%;">Sender Name</th>
            <th style="width:15%;">Subject</th>
            <th style="width:40%;">Message</th>
            <th style="width:10%;">Date</th>
            <th style="width:15%;">Full Message
         </tr-->
         <?php 
        if(isset($GLOBALS['arr'])){
            foreach($GLOBALS['arr'] as $ar){
                $subject=$ar->subject;
                $message=$ar->message;
                $date=$ar->date;
                $id=$ar->userid;
                $name=((new User($id))->data()->firstname)." ".((new User($id))->data()->lastname);
                echo "<tr>
                    <td> {$name} </td>
                    <td>{$subject}</td>
                    <td>{$message}</td>
                    <td>{$date}</td>
                    <td><button class='button'>View Message</button> </td>
                    </tr>";}}
                    ?>

            <!--/table>
        </div-->
