<?php

class IndexController extends ControllerBase
{

    public function initialize() {
        parent::initialize();
    }

    public function indexAction()
    {

    }

    public function dodoAction() {
        $this->view->disable();

        echo "dodo";
    }

}

