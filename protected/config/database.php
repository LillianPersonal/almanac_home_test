<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:port=8889;host=localhost;dbname=Testing',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',
	
);


/*CREATE TABLE AlmanacPost
(
	id INTEGER NOT NULL PRIMARY KEY auto_increment,
	text VARCHAR(200) NOT NULL,
	image_path VARCHAR(200) NOT NULL
);
*/