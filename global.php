<?php

spl_autoload_register("autoload");

function autoload($class_name)
{
    if (file_exists('/classes/'.$class_name.'.php')) {
        require_once "/classes/$class_name.php";
    }
}
?>