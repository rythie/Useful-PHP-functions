<?php

/**
 *  Filter by array key
 *  
 *  Example:  
 *
 *  print_r(array_subset(array("x", "y"), array("x" => 1, "y" => 2, "z" => 3)));
 *	Array
 *	(
 *		 [x] => 1
 *		 [y] => 2
 *	)
 */

function array_subset($whitelist, $array)
{
     return array_filter($array, function ($key) use ($whitelist) {
        return in_array($key, $whitelist, TRUE);
     }, ARRAY_FILTER_USE_KEY);
}
