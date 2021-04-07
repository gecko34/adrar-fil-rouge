<?php

 	define ("ROUTEBASE", "http://localhost/adrar-php/poo16/index.php");


 	define("BDDNAME", "mysql:host=localhost;dbname=testbase");
  define("BDDUSER", "root");
 	define("BDDPASSWORD", "root");


  // Route passée dans l'URL => [controller correspondant, options]

  define("ROUTE",[
    "home"=>"controlHome",
    "connect"=>"controlConnect",
    "createUser"=>"controlCreateUser",
    "showUser"=>"controlShowUser",
    "createArticle"=>"controlCreateArticle",
    "showArticles"=>"controlShowArticles"
  ]);
