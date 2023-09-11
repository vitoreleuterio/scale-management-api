<?php

  namespace App\Modules\repositories\implementations;
  use App\Modules\repositories\SUsersRepository;
  // require_once "helpers/string_convert_helper.php";

  class UsersRepository implements SUsersRepository{

    private $database;
    private $table_index;
    public function __construct(\DatabaseConnection $database){
      $this->database = $database;
      $this->table_index = 1;
    }
    public function listAllByGroup(string $id){
   
      if($id>=0){

        $sql = "SELECT  users.name, users.date_birth, USR_GROUP.fk_nivel, NIVEL.description,  USR_GROUP.fk_user FROM nivel_user_group USR_GROUP INNER JOIN groups ON groups.id=USR_GROUP.fk_group INNER JOIN users ON users.id=USR_GROUP.fk_user INNER JOIN nivel_acesso NIVEL ON NIVEL.id=USR_GROUP.fk_group WHERE USR_GROUP.date_delete IS NULL AND  USR_GROUP.fk_group=:id";

        $aply = $this->database->query($sql, [ "id" => $id], true);
        $usersOfGroup = [];
        foreach($aply as $item){
          array_push($usersOfGroup, [
            'user_id' => $item['fk_user'],
            'acess_id' => $item['fk_nivel'],
            'acess_description' => $item['description'],
            'user_name' => $item['name'],
            'user_date_birth' => $item['date_birth'],
          ]);
        }
        
        return json_encode([
          'data' => $usersOfGroup,
        ]);
      
      }
     
    

    }


    public function create(string $name, string $date, string $phone ){
 
      $sql = "INSERT INTO users VALUES(0, :username, :datebirthday, :phone, now())";
        if ($this->database->query($sql, ["username"=>$name, "datebirthday" => $date, "phone" => $phone], false)) {
          return json_encode(["data" => ["error" => false] ]);
        } else {
          return json_encode(["data" => ["error" => true] ]);

        }
   
      }

      public function update(int $id, string $name, string $date, string $phone ){
        $sql = "UPDATE users SET name=:username, date_birth=:datebirthday, contact=:phone WHERE id=:id";
        if ($this->database->query($sql, ["username"=>$name, "datebirthday" => $date, "phone" => $phone, "id" => $id], false)) {
          return json_encode(["data" => ["error" => false] ]);
        } else {
          return json_encode(["data" => ["error" => true] ]);

        }

      }

      public function delete(string $ids){

        $array_ids = explode(',', $ids);
        $qtd=0;
        foreach($array_ids as $id){
          $sql = "DELETE FROM users WHERE id =:id";
         $query= $this->database->query($sql, ["id" => $id], false);
         $qtd = $query ?  $qtd+1: $qtd;
        }
       
   
        if ($array_ids) {
          return json_encode(["data" => ["deletado" => $qtd] ]);
        } else {
          return json_encode(["data" => ["error" => true] ]);

        }

      }

      public function list(){

        $sql = "SELECT users.id, users.name, users.date_birth, COUNT(USR_GROUP.id) as QTD 
        FROM users LEFT JOIN nivel_user_group USR_GROUP
        ON users.id=USR_GROUP.fk_user WHERE USR_GROUP.date_delete IS NULL GROUP by users.id";

      $aply = $this->database->query($sql,[], true);
      $users = [];
      foreach($aply as $item){
        array_push($users, [
          'user_id' => $item['id'],
          'user_name' => $item['name'],
          'user_date_birth' => $item['date_birth'],
          'qtd' => $item['QTD'],

        ]);
      }

      return json_encode([
        'data' => $users,
      ]);
    
      }
    }
?>