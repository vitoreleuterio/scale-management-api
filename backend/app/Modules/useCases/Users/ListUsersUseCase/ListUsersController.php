<?php
namespace App\Modules\useCases\Users\ListUsersUseCase;

  class ListUsersController{
    private $listallUsers;
    public function __construct(ListUsersUseCase $listallUsers){
      $this->listallUsers = $listallUsers;
    }
    public function handler($data){
      
      return $this->listallUsers->execute();
    }
  }

?>