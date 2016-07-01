<?php

namespace lib;

class Controller
{

    var $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->vars))
            return $this->vars[$name];
        if (array_key_exists($name, $_REQUEST))
            return $_REQUEST[$name];
        return null;
    }

    public function call($method)
    {
        return $this->$method();
    }

}