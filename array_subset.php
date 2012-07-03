<?php

/**
 *  Filter by array key
 *  
 *  Example:  
 *
 *  print_r(array_subset(array("x","y"),array("x" => 1, "y" => "2", "z" => 3)));
 *	Array
 *	(
 *		 [x] => 1
 *		 [y] => 2
 *	)
 */

function array_subset($whitelist, $array)
{
    $out_array = array();
    if(!empty($array))
    {
        foreach($array as $key => $value)
        {
            if(in_array($key,$whitelist,TRUE))
                $out_array[$key] = $value;
        }
    }
    return $out_array;
}
