<?php
	switch($action) {
		case 'deltaDental':
			include ('views/deltaDentalAdminHome.php');
			break;
		case 'deltaDentalAdminGroups':
			include ('views/deltaDentalAdminGroups.php');
			break;
		default:
			echo "Action $action is not recognized";
			break;
	}//end switch
	
	//case for header: page title, right corner
?>