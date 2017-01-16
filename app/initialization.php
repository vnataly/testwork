<?php
    require_once 'config.php';
    require_once 'core/controller.php';
    require_once 'core/model.php';
    require_once 'core/route.php';

    require_once 'classes/DB.php';
    require_once 'classes/Templates.php';
   // require_once 'models/users_model.php';
    session_start();
    Route::start();
?>