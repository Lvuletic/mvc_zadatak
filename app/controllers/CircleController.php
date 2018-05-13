<?php

class CircleController extends \Phalcon\Mvc\Controller
{

    public function indexAction($radius) {

        $this->view->disable();

        $response = new \Phalcon\Http\Response();

        $circle = new Circle();
        $circle->setRadius($radius);
        $circle->calculateCircumference();
        $circle->calculateSurface();

        $data = [
            'type' => 'circle',
            'radius' => $radius,
            'surface' => $circle->getSurface(),
            'circumference' => $circle->getCircumference()
        ];

        $response->setJsonContent($data);

        return $response;
    }

}

