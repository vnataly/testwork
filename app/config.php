<?php
  /**
    *Path settings
  */
  define('DOMAINSERVER', 'http://' . $_SERVER['HTTP_HOST']);
  define('VIEWSPATH', 'app/views/');
  define('IMGPATH', DOMAINSERVER . '/img/');
  define('IMGTASKPATH', DOMAINSERVER . '/img/tasks/');
  define('CONTROLLERSPATH', 'app/controllers/');
  define('MODELSPATH', 'app/models/');
  define('DOMAINSERVER', 'http://' . $_SERVER['HTTP_HOST']);
  define('JSPATH', DOMAINSERVER . '/js/');
  define('CSSPATH', DOMAINSERVER . '/css/');
  /**
    *Database settings
  */
  define('DBTYPE', 'mysql');
  define('DBHOST', 'localhost');
  define('DBLOGIN', 'root');
  define('DBPASSWORD', '');
  define('DBNAME', 'testwork_beejee');
  /**
    *Router settings 
  */
  define("CONTROLLERDEFAULT", 'Login');
  define("ACTIONDEFAULT", 'index');
?>