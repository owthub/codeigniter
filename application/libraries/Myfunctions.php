<?php

class Myfunctions{

    function my_upper_case($string){

        return strtoupper($string);
    }

    function remove_space($string){

        // $string = sanjay kumar
        // $string = Sanjay_Kumar => sanjay_kumar

        $string = str_replace(" ","_",$string);
        return $string = strtolower($string);
    }
}

 ?>
