<?php
/**
 * Created by PhpStorm.
 * User: bravo
 * Date: 2019/4/15
 * Time: 17:20
 */

if (!function_exists('dd')) {

	function dd(...$args)
	{
		foreach ($args as $x) {
			var_dump($x);
		}
		die;
	}

}

function vd($arg){
	var_dump($arg);
}