<?php

namespace App\Core;

class Router
{
    private array $routes;
    private Request $request;

    public function __construct(Request $request)
    {
        $this->routes = [];
        $this->request = $request;
    }

    /**
     * Register a GET request for the application
     * @param string $path
     * @param mixed $callback
     * @return void
     */
    public function get(string $path, mixed $callback): void
    {
        if (empty($path)) {
            $path = '/';
        }

        $this->routes['get'][$path] = $callback;
    }

    /**
     * Register a POST request for the application
     * @param string $path
     * @param mixed $callback
     * @return void
     */
    public function post(string $path, mixed $callback): void
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * Compile the closure given as the callback
     * @return mixed
     */
    public function resolve(): mixed
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path];

        return call_user_func($callback);
    }
}