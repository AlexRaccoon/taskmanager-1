<?php
/**
 * Created by PhpStorm.
 * User: wap34
 * Date: 05/05/17
 * Time: 15:52
 */
require "./src/utilities.php";

$filename = "./tasks.csv";
$taskList = loadTask($filename);
require  "./views/index.html";