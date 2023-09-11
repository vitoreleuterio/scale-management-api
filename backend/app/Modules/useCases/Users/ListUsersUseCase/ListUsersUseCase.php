<?php
namespace App\Modules\useCases\Users\ListUsersUseCase;

use App\Modules\repositories\SUsersRepository;

class ListUsersUseCase{
    private $usersRepository;
    
    public function __construct(SUsersRepository $usersRepository){
      
      $this->usersRepository = $usersRepository;
            

    }
    public function execute(){

      return $this->usersRepository->list();
    }
  }

?>
