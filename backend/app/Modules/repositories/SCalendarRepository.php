<?php
  namespace App\Modules\repositories;
  interface SCalendarRepository {
    public function create(string $datetime, int $id_scale, int $id_condition, int $id_location, int $id_period, int $id_skill,  int $require_level);
    public function createList(string $datetime, int $id_scale, int $id_condition, int $id_location, int $id_period, int $id_skill, int $require_level);
    public function setCalendar(int $id, int $id_user, int $points);
    public function delete(string $ids);
    public function listAll();
    public function listByUser(int $id_user);
    public function listByScale(int $id_scale);
   public function listUserbySkill(int $id_skill);
   public function listScaleByUser(int $id_user);
}
?>