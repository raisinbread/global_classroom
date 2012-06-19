<?php
/**
 * Orchestra.io Bootstap for Lithium
 *
 * add `require __DIR__ . '/bootstrap/orchestra.php';` immediately after
 * `require __DIR__ . '/bootstrap/libraries.php';` in bootstrap.php
 */
use lithium\core\Libraries;

Libraries::add('app', array('default'=> true, 'resources' => call_user_func(function() {
	if (!is_dir($resources = str_replace("//", "/", sys_get_temp_dir() . '/resources'))) {
		foreach (array($resources, "{$resources}/logs", "{$resources}/tmp/cache/templates") as $d) {
			mkdir($d, 0777, true);
		}
	}
	return $resources;
})));