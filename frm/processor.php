<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 

mail("adventureproductions@gmail.com","Sent from WEBZAH webform","Submitted:

NAME: " . $_POST['name'] . " 
EMAIL: " . $_POST['email'] . " 

MESSAGE: 
" . $_POST['message'] . " 

");

echo 1;// submitted 
		
}
else
{
echo 0; // invalid code
}
?>
