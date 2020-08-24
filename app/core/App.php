<?php

/**
 * App
 * @doc
 * @category
 */
class App
{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        $url = $this->parseUrl();

        // Controller
        if(!empty($url[0])){
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        include_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Menjalanakan  controller , method dan params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Method parseUrl
     *
     * @return array
     */
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url  = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
