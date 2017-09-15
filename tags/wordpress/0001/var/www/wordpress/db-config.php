<?php

$wpdb->add_database( array(
	'host'     => 'db1.g4.gm.a8c.com:3306',
	'user'     => 'wp',
	'password' => 'drupal',
	'name'     => 'wp',
	'write'    => 1,
	'read'     => 1,
	'dataset'  => 'global',
	'timeout'  => 0.2,
) );
$wpdb->add_database( array(
	'host'     => 'db2.g4.gm.a8c.com:3306',
	'user'     => 'wp',
	'password' => 'drupal',
	'name'     => 'wp',
	'write'    => 0,
	'read'     => 1,
	'dataset'  => 'global',
	'timeout'  => 0.2,
) );

$wpdb->save_queries = true;
$wpdb->persistent = false;
$wpdb->max_connections = 100;
$wpdb->check_tcp_responsiveness = true;
$wpdb->min_tries = 5;
