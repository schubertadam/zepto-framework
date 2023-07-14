<?php

namespace App\Core;

class Request
{
    /**
     * Return the base url without ?parameters
     * @return string
     */
    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?');

        return $position ? substr($path, 0, $position): $path;
    }

    /**
     * Get the currently active method type
     * @return string
     */
    public function getMethod(): string {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}