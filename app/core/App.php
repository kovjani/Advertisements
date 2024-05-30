<?php

class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {

        $url = $this->parseUrl();

        // If a Controller exists with the name in the url, go to the page.
        // Else go to home page by default.
        if(!is_null($url)){
            if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php'))
            {
                $this->controller = ucfirst($url[0]) . 'Controller';
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        // After the controller has been selected from the url
        // create an appropriate controller object and call its 'index' method with 0 parameters.
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            // Getting the ‘url’ parameter from the query string,
            // rtrim() to remove any trailing slashes (forward slash placed at the end of a URL),
            // filter_var() to prevent XSS attacks,
            // explode() to splitting it into an array based on slashes.
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return null;
    }
}