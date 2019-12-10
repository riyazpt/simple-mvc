<?php


class App {

    protected $controller='home';
    protected $method='index';
    protected $params=[];
    protected $route=[];

    

    function __construct () {

       
        define("ROOT", $_SERVER['DOCUMENT_ROOT']. '/simple-mvc-Jaznet/');
        define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'].'/simple-mvc-Jaznet/public/');
        
        
        $this->route=$this->parseUrl();
       
        $this->setRoute($this->route);
    }

 
 function setRoute($route) {
   $route[0] = strtolower($route[0]);
     if (file_exists('../app/controllers/' . $route[0] . '.php')) {
           
          
            $this->controller =  $route[0];
            unset($route[0]);
        }  
       require_once('../app/controllers/' . $this->controller . '.php');
        $this->controller= new $this->controller;
       
        if(isset($route[1]))
        {
            if(method_exists($this->controller, $route[1]))
            {
               $this->method=$route[1];
               unset($route[1]);
            }
        }
        $this->params=$route? array_values($route):[];
        
        call_user_func_array([$this->controller, $this->method],$this->params);
   
 }
    

    function parseUrl() {
        if (isset($_GET['url'])) {

            return $route = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        }
        
    
        
    
}

?>