<?php

    $country = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");

    for($i = 0;$i< count($country);$i++){
        echo $country[$i];
        if($i != count($country)-1){
            echo ", ";
        }
    }


?>