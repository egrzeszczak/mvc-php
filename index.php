<?php 
    // Objekty
    // Biblioteki
    require 'libs/Session.php';
    require 'libs/Database.php';
    require 'libs/App.php';
    require 'libs/Controller.php';
    require 'libs/View.php';
    require 'libs/Model.php';
    // Konfiguracja
    require 'config/paths.php';

    Session::start();
    $application = new App();
?>