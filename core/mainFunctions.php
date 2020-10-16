<?php
/**
 * Main functions
 */

/**
 * Generating the requested page
 * @param string $controllerName Controller name
 * @param string $actionName Action name. Default: index
 */
function loadPage($controllerName, $actionName = 'index'){
    include_once Prefix.$controllerName.Postfix;
    $function = $actionName.'Action';
    $function();
}