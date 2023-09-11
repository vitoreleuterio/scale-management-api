<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once "conexao.php";

use App\Routes\UsersRoutes;

function routes($route, $data = null){

  switch($route[0]){
  
    case "users":
      $usersRoutes = new UsersRoutes();
      return $usersRoutes->route($route[1], $data);
    break;
  }
}