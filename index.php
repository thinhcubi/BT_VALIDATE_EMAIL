<?php

function checkEmail($str)
{
    $parent = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($parent,$str)){
        echo ("Email hop le");
    } else {
        echo ("Email o hop le");
    }
}
checkEmail('a@gmail.com');
 echo "<br>";
checkEmail('ab@yahoo.com');
echo "<br>";
checkEmail('abc@hotmail.com');
echo "<br>";

checkEmail('@gmail.com');
echo "<br>";
checkEmail('ab@gmail');
echo "<br>";
checkEmail('@#abc@gmail.com');