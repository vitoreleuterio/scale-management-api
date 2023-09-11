<?php
    namespace App\Modules\useCases\Users\DeleteUsersUseCase;
  use App\Modules\repositories\implementations;
  global $db_systemCalendar;
  $usersRepository = new implementations\UsersRepository($db_systemCalendar);
  $deleteUsersUseCase = new DeleteUsersUseCase($usersRepository);
  $deleteUsersController = new DeleteUsersController($deleteUsersUseCase);
?>