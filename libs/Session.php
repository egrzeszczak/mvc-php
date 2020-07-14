<?php 
    class Session{
        public static function start(){
            session_start();
        }
        public static function set($key, $value){
            $_SESSION[$key] = $value;
        }
        public static function unset($key){
            unset($_SESSION[$key]);
        }
        public static function isset($key){
            if(!(empty($_SESSION[$key]))){
                return true;
            } else return false;
        }
        public static function get($key){
            return $_SESSION[$key];
        }
        public static function destroy(){
            unset($_SESSION);
            session_destroy();
        }
    }
?>
