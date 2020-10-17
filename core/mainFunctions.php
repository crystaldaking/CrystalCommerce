<?php
/**
 * Main functions
 */

/**
 * Generating the requested page
 * @param string $controllerName Controller name
 * @param string $actionName Action name. Default: index
 */
function loadPage($smatry, $controllerName, $actionName = 'index'){
    include_once Prefix.$controllerName.Postfix;
    $function = $actionName.'Action';
    $function($smatry);
}

/**
 * Load template
 * @param Smarty $smatry Smatry object
 * @param string $templateName Template name
 */
function loadTemplate($smatry,$templateName){
    $smatry->display($templateName.TemplatePostfix);
}

