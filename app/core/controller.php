<?php

abstract class Controller {

 
    protected $class;
    function __construct () {

       

    }

   


    function model ($modelClass) {

      
        require_once(ROOT . '/app/models/' . $modelClass . '.php');

        return $this->class = new $modelClass;

    }

    function view ($view, $data = []) {

        if (is_array($data))
            extract($data);

        require(ROOT . '/app/views/' . $view . '.php');

    }

}

?>