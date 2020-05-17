<?php
require_once 'core/init.php';
$user=new User();
$data=$user->data();
echo $data->firstname;