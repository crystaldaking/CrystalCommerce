<?php
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

loadPage($controllerName,$actionName);