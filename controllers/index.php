<?php
    class Index extends Controller{
        function __construct(){
            parent::__construct();
        }
        function __index(){
            $this -> view -> __render("index/index");
        }
    }
?>