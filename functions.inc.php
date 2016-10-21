<?php

//here is whear to put function used by module. They must be named MODULENAME_...
// Example

function generic_debug($msg){
    $openfile = fopen ("/var/log/asterisk/freepbx_dbug.log","a");
    $msg = var_export($msg,true);
    fwrite ($openfile,"$msg\n\n");
    fclose ($openfile);
}
