<?php
  namespace App\Modules\repositories;
  interface SLocationRepository{
    public function create(string $name, string $logradouro);
    public function update(int $id, string $name, string $logradouro);
    public function delete(string $ids);
    public function listAll();
    public function list(int $id);
    public function deleteAll(string $ids);
}

?>  