<?php
//changes in the fetaure only
//this is for fetature branch
date_default_timezone_set('Asia/Kolkata');
//echo date("Y-m-d H:i:s");exit;
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
 
//error_reporting("-1");
ini_set('display_errors', 0); 

//error_reporting(E_ALL);
//chdir(dirname(__DIR__));
// die('maintenance downtime');
//error_reporting(E_ALL & ~E_NOTICE);
// dirname(__DIR__).'\adv8';
chdir(dirname(__DIR__).'\agldashboard-maruti');

//chdir(dirname(__DIR__).'\\');
// Setup autoloading
require 'init_autoloader.php';
// Run the application!
//echo "f";exit;

echo $g;
//<<<<<<< HEAD
echo "In feature";
echo "New branbg";
////=======
echo "In master";
//<<<<<<< HEAD
echo "sss";
//=======
//>>>>>>> 832792ffe42efbbaa2c2773d7447a30f3602486a


echo "d";
//>>>>>>> 83e8f7165e06778da3ffbe1117c3e135749432eb
Zend\Mvc\Application::init(require 'config/application.config.php')->run();

?>
