<?php
  namespace App\Modules\useCases\Users\ListUsersUseCase;

  use App\Modules\repositories\implementations;
  global $db_systemCalendar;
  $usersRepository = new implementations\UsersRepository($db_systemCalendar);
  $listUsersUseCase = new ListUsersUseCase($usersRepository);
  $listUsersController = new ListUsersController($listUsersUseCase);
?>