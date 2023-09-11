<?php
  namespace App\Modules\repositories;
  interface SScalesRepository{
    public function create(string $description, int $id_group, string $star_date, string $end_date);
    public function update(int $id, string $description, int $id_group, string $star_date, string $end_date);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function listByGroup(string $group);
}

?>  