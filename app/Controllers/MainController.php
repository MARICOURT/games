<?php

namespace Games\Controllers;

/**
 * This class is dedicated to display static pages
 */
class MainController extends CoreController {

    /**
     * Homepage
     * 
     * @param array $params
     * @return void
     */
    public function home($params = []) {
        $this->show('home');
    }

    /**
     * Board/game
     * 
     * @param array $params contains the specific name game
     * @return void
     */
    public function board($params = []) {
        $this->show('board', $params);
    }
}