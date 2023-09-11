<?php
    namespace App\Modules\useCases\Users\CreateUsersUseCase;
  use App\Modules\repositories\implementations;
  global $db_systemCalendar;
  $usersRepository = new implementations\UsersRepository($db_systemCalendar);
  $createUsersUseCase = new CreateUsersUseCase($usersRepository);
  $createUsersController = new CreateUsersController($createUsersUseCase);
?>