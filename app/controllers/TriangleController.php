<?php

class TriangleController extends \Phalcon\Mvc\Controller
{

    public function indexAction($a, $b, $c) {
        $this->view->disable();

        $response = new \Phalcon\Http\Response();

        $triangle = new Triangle();
        $triangle->setA($a);
        $triangle->setB($b);
        $triangle->setC($c);
        $triangle->calculateCircumference();
        $triangle->calculateSurface();

        $data = [
            'type' => 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $triangle->getSurface(),
            'circumference' => $triangle->getCircumference()
        ];

        $response->setJsonContent($data);

        return $response;
    }

}

