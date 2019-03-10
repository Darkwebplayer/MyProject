<?php //auto loader (initalizer)
require_once('config/config.php');
//auto load classes

//Helper functions files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

function __autoload($class_name){
    require_once('libraries/'.$class_name.'.php');
}
?>