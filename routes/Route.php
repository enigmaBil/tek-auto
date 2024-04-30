<?php


namespace Router;

use Database\DBconnect;

class Route
{
    private string $path;
    private string $action;
    private array $matches = [];

    public function __construct(string $path, string $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    public function matches(string $url): bool
    {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$path$#";

        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        }

        return false;
    }

    public function execute()
    {
        $actionParts = explode('@', $this->action);

        if (count($actionParts) !== 2) {
            throw new \RuntimeException("Action format invalid: {$this->action}");
        }

        $controllerClass = $actionParts[0];
        $method = $actionParts[1];

        if (!class_exists($controllerClass)) {
            throw new \RuntimeException("Controller class not found: $controllerClass");
        }

        $controller = new $controllerClass(new DBconnect(DB_NAME, DB_HOST, DB_USER, DB_PWD));

        if (!method_exists($controller, $method)) {
            throw new \RuntimeException("Method not found in controller: $method");
        }

        // Check if there are matches to pass as parameters
        $params = isset($this->matches[1]) ? [$this->matches[1]] : [];

        return call_user_func_array([$controller, $method], $params);
    }
}
































//namespace Router;
//
//use Database\DBconnect;
//
//class Route
//{
//    public string $path;
//    public string $action;
//    public $matches;
//    public function __construct($path, $action){
//        $this->path = trim($path, '/');
//        $this->action = $action;
//    }
//
//    public function matches(string $url){
//        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
//        $pathToMatch = "#^$path$#";
//
//        if (preg_match($pathToMatch, $url, $matches)){
//            $this->matches = $matches;
//            return true;
//        }else{
//            return false;
//        }
//    }
//
//    public function execute(){
//        $param = explode('@', $this->action);
//        $controller = new $param[0](new DBconnect(DB_NAME,DB_HOST,DB_USER,DB_PWD));
//        $method = $param[1];
//
//        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
//    }
//}