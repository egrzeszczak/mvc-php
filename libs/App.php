<?php
    class App
    {
        function __construct(){
//------------------------------------------------------------------------------------------------------------------------
//          Trimming $_GET['url']
            $url = isset($_GET['url']) ? $_GET['url'] : NULL ;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

//------------------------------------------------------------------------------------------------------------------------
//          Domyślna strona dla pustego argumentu
            if(empty($url[0])){
                $url[0] = "index";
            }

//------------------------------------------------------------------------------------------------------------------------
//          Sprawdź czy strona istnieje
            $file = 'controllers/'.$url[0].'.php';
            if(file_exists($file) && $url[0]!="404"){
                require $file;
            } else {
//------------------------------------------------------------------------------------------------------------------------
//              404
                require 'controllers/404.php';
                $controller = new FileNotFound();
                $controller -> __index();
                return false;
            }

//------------------------------------------------------------------------------------------------------------------------
//          Definicja kontrolera
            $controller = new $url[0];
            $controller -> __loadModel($url[0]);

            // Main
            if (isset($url[2]))
            {
                $controller -> {$url[1]}($url[2]);
            }
            else if (isset($url[1]))
            {                
                $controller -> __index($url[1]);                
            } 
            else
            {
                $controller -> __index();
            }
            
        }
    }
    
?>