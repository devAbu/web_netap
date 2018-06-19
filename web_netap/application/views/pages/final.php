<?php 

$ages = array(0,1,2,3,4,6,7);

while($element = current($ages)){
    echo $element . ", ";
    next($ages);
}
?>