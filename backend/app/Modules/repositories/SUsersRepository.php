<?php
  namespace App\Modules\repositories;
  interface SUsersRepository{
    public function create(string $name, string $date_birthday, string $phone);
    public function update(int $id, string $name, string $date_birthday, string $phone);
    public function delete(string $ids);
    public function list();
    public function listAllByGroup(string $id);
  }
?>