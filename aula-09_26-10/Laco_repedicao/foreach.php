<?php

$nomes = array('ana', 'beatriz', 'carlos', 'daniel');

foreach($nomes as $item){
    echo $item . '<br>';
}


for($x=0; $x<count($nomes);$x++){
    echo $nomes[$x];
}

?>