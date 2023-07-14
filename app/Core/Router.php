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
     *
     * @return void
     */
    public function resolve()
    {
        var_dump($this->request->getPath());
    }
}