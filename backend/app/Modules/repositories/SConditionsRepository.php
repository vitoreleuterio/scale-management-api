<?php
  namespace App\Modules\repositories;
  interface SConditionsRepository {
    public function create(int $id_user, int $id_scale, int $id_type, int $id_period, int $id_location, string $moment, int $id_skill_user, 
    int $id_skill_user_scale);
    public function update(int $id, int $id_user, int $id_scale, int $id_type, int $id_period, int $id_location, string $moment, int $id_skill_user, 
    int $id_skill_user_scale);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
    public function listByUser(int $id_user);
    public function listByScale(int $id_scale);
    public function listByType(int $id_type);
    public function listByPeriod(int $id_period);
    public function listByLocation(int $id_location);
    public function listBySkillUser(int $id_skill_user);
    public function listBySkillUserScale(int $id_skill_user_scale);
}
 ?>