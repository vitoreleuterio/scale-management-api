<?php
  namespace App\Modules\repositories;
interface SUserSkillsRepository {
    public function create(int $id_user, int $id_skill, int $level);
    public function update(int $id, int $id_user, int $id_skill, int $level);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
    public function listByUser(int $id_user);
    public function listBySkill(int $id_skill);
    public function listByLevel(int $level);
}
?>