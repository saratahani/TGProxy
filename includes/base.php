<?php
$root = 'http://'.$_SERVER['HTTP_HOST'].strtr(realpath(__DIR__),[$_SERVER['DOCUMENT_ROOT'] => null , 'includes' => null]);

// source setting 
define('channel',false); //is send proxy to channel?
define('grabber',true); //is grab proxy now?
define('checking',true); // is delete bad proxies?
// main varables
define('TOKENBOT','5985218499:AAFUn9Ad5MKGKQ3wdNiwGvuFLBjj5krZ_ZE'); # bot tokan from @botfather
define('ADMINID' , '5615076487'); // bot admin unique id
// channel info 
$channel_id = ''; // unique id
$username = ''; //username @example
// checking info 
$ping_limit = 400; // limit proxy ping for checking
