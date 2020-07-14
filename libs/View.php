<?php 
    class View{
        public $buttons;
        function __construct(){
        }
        public function __render($name, $args = false){
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
        public function __renderless($name, $args = false){
            require 'views/'.$name.'.php';
        }
    }
?>