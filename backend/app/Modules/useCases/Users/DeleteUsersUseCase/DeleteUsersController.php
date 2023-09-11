<?php
  namespace App\Modules\useCases\Users\DeleteUsersUseCase;
  class DeleteUsersController{
    private $deleteUsers;
    public function __construct(DeleteUsersUseCase $deleteUsers){
      $this->deleteUsers = $deleteUsers;
    }
    public function handler($data){
        $id = '10, 11';
      // $user = $data['dados']['dados'];
      return $this->deleteUsers->execute($id);
    }
  }

?>