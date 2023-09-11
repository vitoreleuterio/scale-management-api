<?php
namespace App\Modules\useCases\Users\DeleteUsersUseCase;

use App\Modules\repositories\SUsersRepository;

class DeleteUsersUseCase{
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

      return $this->usersRepository->delete($id);
    }
  }

?>
