<?php

    class FrontController {

        public static function main() {

            if(! empty($_GET['url']))
                  $controllerName = $_GET['url'] . "Controller";
            else
                  $controllerName = "IndexController";
     
            //Lo mismo sucede con las acciones, si no hay acción, tomamos index como acción
            if(! empty($_GET['accion']))
                  $actionName = $_GET['accion'];
            else
                  $actionName = "index";
     
            $controllerPath = "controllers/" . $controllerName . '.php';
     
            //Incluimos el fichero que contiene nuestra clase controladora solicitada
            if(is_file($controllerPath))
                  require $controllerPath;
            else
                  die('El controlador no existe - 404 not found');
     
            //Si no existe la clase que buscamos y su acción, mostramos un error 404
            if (is_callable(array($controllerName, $actionName)) == false) {
                trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
                return false;
            }
            //Si todo esta bien, creamos una instancia del controlador y llamamos a la acción
            $controller = new $controllerName();
            $controller->$actionName();
        }
    }
?>