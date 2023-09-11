<?php
namespace App\Modules\useCases\Users\UpdateUsersUseCase;

use App\Modules\repositories\SUsersRepository;

class UpdateUsersUseCase{
    private $usersRepository;
    
    public function __construct(SUsersRepository $usersRepository){
      
      $this->usersRepository = $usersRepository;
            

    }
    public function execute($id, $name, $date_birth, $phone){

      // if(!$professional_id){
      //   return json_encode([
      //     'error' => 1,
      //     'message' => 'ID do profissional inexistente'
      //   ]);
      // }

      return $this->usersRepository->update($id, $name,  $date_birth, $phone);
    }
  }

?>
