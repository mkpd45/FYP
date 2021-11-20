<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'projectdb');
 // Make the connection:
$dbc = mysqli_connect (DB_HOST, DB_USER,  DB_PASSWORD, DB_NAME) OR 
  die ('Could not connect to MySQL: '.mysqli_connect_error() );  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

