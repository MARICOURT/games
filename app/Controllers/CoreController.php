<?php

namespace Games\Controllers;

/* 
    Controllers parent class
*/
class CoreController {

    /** 
    *   Display template
    *   @param string $viewName view/template to display
    *   @param array $viewVars
    *
    *   @return void
    */
    protected function show($viewName, $viewVars = array()) {
        global $router;
        
        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}