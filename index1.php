<?php
require_once 'core/init.php';
$user = new User();

if ($user->isLoggedIn()) {

  include 'prof.php';
  }
 else {
  include 'index2.php';
}