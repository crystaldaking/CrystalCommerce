<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Define settings and functions
 */
include_once '../config/config.php';
include_once  '../core/mainFunctions.php';

/*
 * Define controller name and action name
 */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

/** Load Page
 * @var Smarty $smarty
 */
loadPage($smarty,$controllerName,$actionName);