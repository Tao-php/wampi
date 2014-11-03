<?php
/*
 * This file is part of myTinyLocalHost.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

#===========================================================
#
# 	/!\ WARNING
#
# 	Do not edit configuration data below,
# 	use the config.php dedicated files instead.
#
#===========================================================

return [

	# Wampserver www directory path
	'wampserver.www.dir' => 'c:\wamp\www',

	# The application identifier (used internally)
	'app_id' => 'myTinyLocalHost',


	# Enable/disable debug mode
	'debug' => false,

	# Database connexion configuration.
	'database.connection' => [
		'driver' 	=> 'pdo_mysql',
		'host' 		=> 'localhost',
		'dbname' 	=> 'myTinyLocalHost',
		'user' 		=> 'root',
		'password' 	=> '',
		'charset' 	=> 'utf8'
	],

	# Controllers namespace name
	'routing.controllers_namespace' => 'Application\Controllers',
];