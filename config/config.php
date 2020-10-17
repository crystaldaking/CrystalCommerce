<?php
/**
 * Project settings
 */

require '../vendor/autoload.php';

/*
 * Define controller paths
 */
define('Prefix',"../controllers/");
define('Postfix',"Controller.php");

/**
 * Template name
 */
$template = 'default';

/**
 * Define template path
 */
define('TemplatePrefix',"../views/{$template}/");
define('TemplatePostfix',".tpl");

/**
 * Define web path
 */
define('TemplateWebPath',"../public/templates/{$template}/");

/**
 * Init Smarty
 */
$smarty = new Smarty();
$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir("../tmp/smatry/templateCompile");
$smarty->setCacheDir("../tmp/smarty/cache");
$smarty->setConfigDir("../config/smarty/config");

$smarty->assign('templateWebPath',TemplateWebPath);

