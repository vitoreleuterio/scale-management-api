<?php
  namespace App\Modules\repositories;
  interface SSkillUserScaleRespository{
    public function create(int $id_skill, int $id_scale, int $id_user, int $level);
    public function update(int $id_skill, int $id_scale, int $id_user, int $level);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
    public function listByUser(int $id_user);
    public function listBySkill(int $id_skill);
    public function listByLevel(int $level);

}


?>