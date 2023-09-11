<?php
  namespace App\Modules\repositories;
interface SSkillsRepository {
    public function create(string $name);
    public function update(int $id, string $name);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
}
?>