<?php
  namespace App\Modules\repositories;
  interface SlevelUseGroupRepository {
    public function create(int $id_user, int $id_group, int $id_nivel);
    public function update(int $id, int $id_user, int $id_group, int $id_nivel);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
}

?>  