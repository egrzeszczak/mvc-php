<?php
    class Controller{
        function __construct(){
            $this -> view = new View();
        }

        public function __loadModel($name){
            $path = 'models/'.$name.'model.php';
            if(file_exists($path)){
                require 'models/'.$name."model.php";
                $modelName = $name . "Model";
                $this -> model = new $modelName;
            }
        }

        // Przekierowanie
        public function __redirect($url){
            header("Location: ".URL.$url);
            die();
        }
    }
?>