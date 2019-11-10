<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 22.09.18
 * Time: 15:52
 */
session_start();


require_once('loader.php');

$projects = new AppSelector();
$projects->example_array_and_arrayobject();




