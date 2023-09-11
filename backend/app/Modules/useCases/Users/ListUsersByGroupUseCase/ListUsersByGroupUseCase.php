<?php
namespace App\Modules\useCases\Users\ListUsersByGroupUseCase;

use App\Modules\repositories\SUsersRepository;

class ListUsersByGroupUseCase{
    private $usersRepository;
    
    public function __construct(SUsersRepository $usersRepository){
      
      $this->usersRepository = $usersRepository;
            

    }
    public function execute($id){

      // if(!$professional_id){
      //   return json_encode([
      //     'error' => 1,
      //     'message' => 'ID do profissional inexistente'
      //   ]);
      // }

      return $this->usersRepository->listAllByGroup($id);
    }
  }

?>
