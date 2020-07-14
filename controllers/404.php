<?php
class FileNotFound extends Controller{
    function __construct(){
        parent::__construct();
    }
    function __index(){
        $this -> view -> __renderless("404/index");
    }
}
?>