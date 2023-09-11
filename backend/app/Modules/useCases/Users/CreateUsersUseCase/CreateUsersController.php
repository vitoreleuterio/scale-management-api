<?php
  namespace App\Modules\useCases\Users\CreateUsersUseCase;
  class CreateUsersController{
    private $createUsers;
    public function __construct(CreateUsersUseCase $createUsers){
      $this->createUsers = $createUsers;
    }
    public function handler($data){
     $name = "Manuel";
     $date = "2022-02-21";
     $phone = "15998048225";
      // $user = $data['dados']['dados'];
      return $this->createUsers->execute($name, $date, $phone);
    }
  }

?>