<?php

namespace MVC;

class Router {
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn) {
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->rutasPOST[$url] = $fn;
    }

    public function handleRequest() {
        $urlActual = rtrim($_SERVER['PATH_INFO'] ?? '/', '/');
        $urlActual = $urlActual === '' ? '/' : $urlActual;
        $method = $_SERVER['REQUEST_METHOD'];

        if (!in_array($method, ['GET', 'POST'])) {
            http_response_code(405);
            echo "Método HTTP no permitido.";
            return;
        }

        $funcion = match($method) {
            'GET' => $this->rutasGET[$urlActual] ?? null,
            'POST' => $this->rutasPOST[$urlActual] ?? null,
        };

        if($funcion) {
            call_user_func($funcion, $this);
        }else {
            http_response_code(404);
            echo "Error 404 - Página no encontrada: $urlActual";
        }
    }

    public function render($views, $datos=[]) {
        foreach($datos as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once __DIR__ . "/../app/views/$views.php";
        $root = ob_get_clean();

        include_once __DIR__ . "/../app/views/main.php";
    }
}