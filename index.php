<?php
	$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : "deltaDental";
	
    switch(true) {
        case strpos($action,"deltaDental")===0:
            include("models/cases.php");
            break;
        
        default:
            echo "Unexpected action $action found.<br>";
            break;
    }//end switch
?>