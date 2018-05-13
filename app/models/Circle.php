<?php

use Phalcon\Mvc\Model;

class Circle extends Model
{
    protected $radius;
    protected $surface;
    protected $circumference;

    public function setRadius($radius) {
        $this->radius = $radius;
        return $this;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getSurface () {
        return $this->surface;
    }

    public function getCircumference () {
        return $this->circumference;
    }

    public function calculateSurface () {
        $this->surface = $this->radius * $this->radius * 3.14;
    }

    public function calculateCircumference () {
        $this->circumference = $this->radius * 2 * 3.14;
    }

    public function addSurfaces ($first, $second) {
        return $first->getSurface() + $second->getSurface();
    }

    public function addCircumferences ($first, $second) {
        return $first->getCircumference() + $second->getCircumference();
    }
}