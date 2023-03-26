<?php

declare (strict_types = 1);
function SayMyName(String $name)
{
    echo $name;
}
//SayMyName(100);       // error cuz of strict_type effect
SayMyName("David");
?>
