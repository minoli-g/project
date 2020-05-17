<?php
require_once 'core/init.php';
include 'includes/header1.php';
$arr=$user->search('users','group','=',1, null, '=', null);
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $user=new User();
        $field2=Input::get('srch2');
        // $val1=Input::get('group');
        $val2=Input::get('box2');
        global $arr;
        $arr=$user->search('users','group','=',1, $field2, '=', $val2);
    }
}

?>
<link rel="stylesheet" type="text/css" href="css/table.css">
<div class="mainnotfixed2">
    <form class="" action="" method="post">
        <!-- <input type="radio" id="patient" name="group" value="1" checked>
        <label for="patient">Patient</label>
        <input type="radio" id="physio" name="group" value="3">
        <label for="physio">Physiotheraphist</label>
        <input type="radio" id="recep" name="group" value="4">
        <label for="recep">Receptionist</label><br> -->
        <select id="srch2" name="srch2" value="">
            <option value="firstname">First Name</option>
            <option value="lastname">Last Name</option>
            <option value="username">Username</option>
            <option value="phone1">Phone No</option>
            <option value="nic">NIC No</option>
        </select>
        <input type="text" id="box2" name='box2' placeholder="Search for ...">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <input type="submit" class="" value="Search">
    </form>

    <br><br>
    <table style="border:0px ;margin-left:auto;margin-right:auto;">
        <tr>
            <th style="width:5%;">ID</th>
            <th style="width:23%;">Name</th>
            <th style="width:12%;">Phone</th>
            <th style="width:27%;">Address</th>
            <th style="width:10%;">Appoinment</th>
            <th style="width:23%;">Physiotheraphist
         </tr>
         <?php 
        if(isset($GLOBALS['arr'])){
            foreach($GLOBALS['arr'] as $ar){
                $name=($ar->firstname)." ".$ar->lastname;
                $phone=$ar->phone1;
                $address=$ar->address;
                $id=$ar->id;
                $status="Activated";
                // $ar->status==1?"Deactivate":"Activate";
                echo "<tr>
                    <td> {$id} </td>
                    <td> {$name} </td>
                    <td>{$phone}</td>
                    <td>{$address}</td>
                    </tr>";}}
                    ?>

            </table>
        </div>
