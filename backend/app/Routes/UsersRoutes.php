<?php
  namespace App\Routes;

  class UsersRoutes{
    public function route($path, $data = null){
     
      switch($path){
        case "create":
        require_once "backend/app/Modules/useCases/Users/CreateUsersUseCase/index.php";
        return   $createUsersController->handler($data);
        break;

        case "update":
        require_once "backend/app/Modules/useCases/Users/UpdateUsersUseCase/index.php";
        return   $updateUsersController->handler($data);
        break;

        case "delete":
        require_once "backend/app/Modules/useCases/Users/DeleteUsersUseCase/index.php";
        return   $deleteUsersController->handler($data);
        break;

        case "listByGroup":
          require_once "backend/app/Modules/useCases/Users/listUsersByGroupUseCase/index.php";
          return   $listUsersByGroupController->handler($data);
          break;

          case "listAll":
            require_once "backend/app/Modules/useCases/Users/listUsersUseCase/index.php";
            return   $listUsersController->handler($data);
            break;
        
      }
    }
  }
?>