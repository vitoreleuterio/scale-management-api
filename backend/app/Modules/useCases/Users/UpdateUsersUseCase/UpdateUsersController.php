<?php
  namespace App\Modules\useCases\Users\UpdateUsersUseCase;
  class UpdateUsersController{
    private $updateUsers;
    public function __construct(UpdateUsersUseCase $updateUsers){
      $this->updateUsers = $updateUsers;
    }
    public function handler($data){
        $id = 1;
     $name = "Manuel";
     $date = "2022-02-21";
     $phone = "72636723";
      // $user = $data['dados']['dados'];
      return $this->updateUsers->execute($id, $name, $date, $phone);
    }
  }

?>