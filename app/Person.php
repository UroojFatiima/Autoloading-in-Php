<?php
namespace app;

 class Person{
    public function __construct()
    {
        echo " This is Person Class";

        $obj = new \app\Email();
    }
 }
 function per(){
    echo "This is person per function";
 }

?>