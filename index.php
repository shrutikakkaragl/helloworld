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
echo "In feature";
echo "New branbg";


echo "d";
Zend\Mvc\Application::init(require 'config/application.config.php')->run();

?>
