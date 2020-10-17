<?php
/**
 *  Main page controller
 */
function testAction(){
    echo 'IndexController.php > testAction';
}

/**
 * @param Smarty $smarty
 */
function indexAction($smarty){
    $smarty->assign('pageTitle','Main page');
    loadTemplate($smarty,'index');
}