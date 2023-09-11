<?php
    namespace App\Modules\useCases\Users\ListUsersByGroupUseCase;
  use App\Modules\repositories\implementations;
  global $db_systemCalendar;
  $usersRepository = new implementations\UsersRepository($db_systemCalendar);
  $listUsersByGroupUseCase = new ListUsersByGroupUseCase($usersRepository);
  $listUsersByGroupController = new ListUsersByGroupController($listUsersByGroupUseCase);
?>