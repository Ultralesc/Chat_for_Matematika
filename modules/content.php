<?php
/*распределение ключей*/
if(isset($_GET['route'])) {
	$temp = explode('/', $_GET['route']);
	foreach($temp as $key => $value){
		$_GET['key'.($key)] = $value;
	}
}
unset($_GET['route']);
if (isset($_GET["key0"])) {	
	switch ($_GET["key0"]) {
		case 'login': 
			$modeleContent= 'modules/login'; break;
		case 'exit': 
			$modeleContent= 'modules/exit';	break;		
		case 'editChanels': 
			$modeleContent= 'modules/editChanels';	break;	
		case 'editMessage': 
			$modeleContent= 'modules/editMessage';	break;				
		default: 
			$modeleContent= 'modules/chat'; break;
	}
}
/*
	if(isset($_GET['key1']) ) 
		$modeleContent= 'modules/ViewNew'; 
	else 	
		$modeleContent= 'modules/News'; break;
case 'Uncategorized': 			
	if (isset($_SESSION['access'])){
   		if ($_SESSION['access'] == 'yes')
   			if(isset($_GET['key1']) )
    			$modeleContent= 'modules/ViewNew';
  			else 
    			$modeleContent= 'modules/News';
			}else {
				$modeleContent= 'modules/ViewNew';
				$_GET['key1'] = 26;
			} break;
case 'Admin': 
	if(isset($_GET['key1']) &&  isset($_GET['key2']) ) 
    	if ($_GET["key1"] == 'edit')
    		$modeleContent= 'modules/Edit';
    	elseif($_GET["key1"] == 'delete')
    		$modeleContent= 'modules/Delete';
    	else 
			$modeleContent= 'modules/Admin';
  		else 
    		$modeleContent= 'modules/Admin';
	 break;		
case 'Login': $modeleContent= 'modules/login'; break;	
case 'Administration': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 25 ; break;
case 'Teaching_staff': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 27; break;
case 'Contacts': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 28 ; break;
case 'Class_teachers_primary_school': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 29 ; break;
case 'General_information_higher_school': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 30 ; break;
case 'Foreign_philology': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 31 ; break;
case 'Technological_profile': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 32 ; break;
case 'School_history': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 44 ; break;
case 'For_parents_primary_school': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 46 ; break;
case 'General_information_primary_school': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 45 ; break;
case 'Future_first-graders': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 47 ; break;    
case 'Preparing_for_the_DPA': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 48 ; break; 
case 'General_information_psychology': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 53 ; break;
case 'Regulatory_framework': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 51 ; break;
case 'Preparing_for_the_DPA_and_ZNO': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 52 ; break;

case 'ViewNew': $modeleContent= 'modules/ViewNew'; 	$viever = 0; ; break;
case 'Site_map': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 54 ; break;
case 'Feedback': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 55 ; break;

case 'Exit': $modeleContent= 'modules/exit'; break;

case '_file-manager':
case 'css':
case 'images':
case 'includes':
case 'libraries':
case 'modules':
case '.htaccess':
case 'TEWP': $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 26; break;
default: $modeleContent= 'modules/ViewNew'; $_GET['key1'] = 26; break;
	}
}else {
	$modeleContent= 'modules/ViewNew'; 
	$_GET['key1'] = 26;
}
*/