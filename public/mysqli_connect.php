<?php
//This sets the constants with our connection information
DEFINE ('DB_HOST', 'localhost'); //Database server -- Typically "localhost"
DEFINE ('DB_USER', 'vande433_FinalProject'); //Database User Name
DEFINE ('DB_PASSWORD', 'R34dy2B3D0n3'); //Database User Password
DEFINE ('DB_NAME', 'vande433_FinalProject'); //Database Name

//This connects us to the database
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die 
('Could not connect to MySQL server with error: ' . mysqli_connect_error());
