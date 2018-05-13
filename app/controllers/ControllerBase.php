<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize() {

        $this->assets
            ->addJs('js/calculator.js');
    }
}
