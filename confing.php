<?php
session_start();

define("BURL","http://localhost/medical");
define("BURLA","http://localhost/medical/admin/");
define("ASSETS","http://localhost/medical/assets/");

define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');

//connect database 
require_once( BL.'fun/db.php');

