<?php
    class Route{
        public static function start(){
            $uri = $_SERVER['REQUEST_URI'];
            $parts = explode('/', $uri);
            $controller = "login";
            $action = "action_index";
            if((isset($parts[1]))&&(!empty($parts[1]))){
                $controller = $parts[1];
                if (!file_exists(CONTROLLERSPATH.$controller.".php")){
                    $controller="error_404";
                }

                require_once CONTROLLERSPATH.$controller.".php";
                $controller_object = new $controller;
                $url=DOMAINSERVER."/".$controller;
                
                if((isset($parts[2]))&&(!empty($parts[2])) && trim($parts[2]) != ''){
                    $action="action_".$parts[2];
                    if(!method_exists($controller_object,$action)){
                        $controller = "error_404";
                        $action = "action_index";
                    }
                }
            }
            require_once CONTROLLERSPATH.$controller.".php";
            $controller_object = new $controller;
            $controller_object->$action();
        }
        
    }
?>