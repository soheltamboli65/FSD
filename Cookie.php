<?php

$cookie_name="JSPM";
$cookie_value="Green";

setcookie($cookie_name, $cookie_value, time()+86400,"/");

?>

<html>
<body>

<?php 

if(isset($_COOKIE[$cookie_name]))
{
echo "cookie ".$cookie_name. " is set";
}

else
{
echo "cookie " . $cookie_name.  " is not set";

}

?>