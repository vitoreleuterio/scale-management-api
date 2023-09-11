<?php
    namespace App\Modules\useCases\Users\UpdateUsersUseCase;
  use App\Modules\repositories\implementations;
  global $db_systemCalendar;
  $usersRepository = new implementations\UsersRepository($db_systemCalendar);
  $updateUsersUseCase = new UpdateUsersUseCase($usersRepository);
  $updateUsersController = new UpdateUsersController($updateUsersUseCase);
?>