<?php
  namespace App\Modules\repositories;
    interface SGroupsRepository{
    public function create(string $description);
    public function update(int $id, string $description);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
    }
?>  