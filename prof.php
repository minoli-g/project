<?php
require_once 'core/init.php';
include 'includes/header1.php';
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $user=new User();
        $field1=Input::get('srch1');
        $field2=Input::get('srch2');
        $val1=Input::get('box1');
        $val2=Input::get('box2');
        global $arr;
        $arr=$user->search('users',$field1,$val1,$field2,$val2);
    }
}

?>

<!--div class="mainnotfixed">
    <form class="" action="" method="post">
        <select id="srch1" name="srch1">
            <option value="firstname">First Name</option>
            <option value="lastname">Last Name</option>
            <option value="address">Receptionist</option>
        </select>
        <input type="text" id="box1" name='box1' onkeyup="myFunction()" placeholder="Search for names..">
        <select id="srch2" name="srch2">
            <option value="phone1">Phone</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select>
        <input type="text" id="box2" name='box2' onkeyup="myFunction()" placeholder="Search for names..">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <input type="submit" class="btn btn-success" value="Search">
    </form>


    <table id="myTable">
        <tr class="header2">
            <th style="width:60%;">Name</th>
            <th style="width:40%;">Country</th>
        </tr>
        <?php 
    if(isset($GLOBALS['arr'])){
        foreach($GLOBALS['arr'] as $ar){
            $firstname=$ar->firstname;
            $lastname=$ar->lastname;
            echo "<tr>
            <td>{$firstname}</td>
            <td>{$lastname}</td>";

        }}
        ?>
    </table>
</div>
<?php
include 'includes/footer1.php';
?>