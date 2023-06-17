<?php
require_once "app/Person.php";
require_once "app/Email.php";;


$email = new app\Email(); 
echo "<br>";
$Person = new app\Person();
echo "<br>";

function per(){
    echo "This is index per function";
 }
 app\per();

?>
