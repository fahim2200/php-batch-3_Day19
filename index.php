<?php

require_once 'vendor/autoload.php';
//use App\classes\Home;
use App\classes\Auth;

//$home = new Home();
//$home->index();
$auth = new Auth();
$auth->login();
