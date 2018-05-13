<?php

use Phalcon\Mvc\Model;

class Triangle extends Model
{
    protected $a;
    protected $b;
    protected $c;
    protected $surface;
    protected $circumference;

    public function setA($a) {
        $this->a = $a;
        return $this;
    }

    public function setB($b) {
        $this->b = $b;
        return $this;
    }

    public function setC($c) {
        $this->c = $c;
        return $this;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function getC() {
        return $this->c;
    }

    public function getSurface () {
        return $this->surface;
    }

    public function getCircumference () {
        return $this->circumference;
    }

    public function calculateSurface () {
        $s = ($this->a + $this->b + $this->c)/2;

        $this->surface = sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function calculateCircumference () {
        $this->circumference = $this->a + $this->b + $this->c;
    }

    public function addSurfaces ($first, $second) {
        return $first->getSurface() + $second->getSurface();
    }

    public function addCircumferences ($first, $second) {
        return $first->getCircumference() + $second->getCircumference();
    }
}