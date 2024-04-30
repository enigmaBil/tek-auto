<?php

namespace Router;

use App\exceptions\NotFoundException;

class Router
{
    public string $url;
    public array $routes = [];
    public function __construct($url){
        $this->url = trim($url, '/');
        $this->routes['GET'] = [];
        $this->routes['POST'] = [];
        $this->routes['PUT'] = [];
        $this->routes['DELETE'] = [];
    }

    public function get(string $path, string $action){
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function post(string $path, string $action){
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function put(string $path, string $action)
    {
        $this->routes['PUT'][] = new Route($path, $action);
    }

    public function delete(string $path, string $action)
    {
        $this->routes['DELETE'][] = new Route($path, $action);
    }

    public function run()
    {
        $requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);

        if (isset($this->routes[$requestMethod])) {
            foreach ($this->routes[$requestMethod] as $route) {
                if ($route->matches($this->url)) {
                    return $route->execute();
                }
            }
        }
        throw new NotFoundException("Page indisponible");
    }
}