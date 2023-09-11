<?php
namespace App\Modules\useCases\Users\CreateUsersUseCase;

use App\Modules\repositories\SUsersRepository;

class CreateUsersUseCase{
    private $usersRepository;
    
    public function __construct(SUsersRepository $usersRepository){
      
      $this->usersRepository = $usersRepository;
            

    }
    public function execute($name, $date_birth, $phone){

      // if(!$professional_id){
      //   return json_encode([
      //     'error' => 1,
      //     'message' => 'ID do profissional inexistente'
      //   ]);
      // }

      return $this->usersRepository->create($name,  $date_birth, $phone);
    }
  }

?>
