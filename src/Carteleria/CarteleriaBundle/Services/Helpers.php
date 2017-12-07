<?php
namespace carteleriaBundle\Services;

class Helpers{

    private $helpers;

    public function __construct($helpers)
    {
         $this->helpers = $helpers;
    }

    public function HolaMundo(){

        return 'Hola symfony 3.4';
    }



}