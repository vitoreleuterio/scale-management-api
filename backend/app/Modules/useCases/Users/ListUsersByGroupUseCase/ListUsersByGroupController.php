<?php
  namespace App\Modules\useCases\Users\ListUsersByGroupUseCase;
  class ListUsersByGroupController{
    private $listallUsersByGroup;
    public function __construct(ListUsersByGroupUseCase $listallUsersByGroup){
      $this->listallUsersByGroup = $listallUsersByGroup;
    }
    public function handler($data){
        $group_id= '1';

    //  $name = "Manuel";
    //  $date = "2022-02-21";
    //  $phone = "72636723";
      // $user = $data['dados']['dados'];
      return $this->listallUsersByGroup->execute($group_id);
    }
  }

?>