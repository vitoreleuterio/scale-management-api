<?php

// require_once "vendor/autoload.php";

 $db_systemCalendar = new DatabaseConnection("mysql", "127.0.0.1", "systemcalendar", "root", "");
// $database = new SystemCalendar($data);
// $database->run();

class DatabaseConnection
{

    /**
     * Objeto pdo de conexão a classe do banco
     */
    public PDO $pdo;

    /**
     * Construtor - pega dados do arquivo .env
     */
    public function __construct($DBDRIVE, $DBHOST, $DBNAME, $DBUSER,$DBPASS, $DBPORT = "3306")
    {
        try{
            /**
             * Instância do PDO
             */
            $this->pdo = new PDO("{$DBDRIVE}:host={$DBHOST};port={$DBPORT};dbname={$DBNAME}", $DBUSER, $DBPASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, $this->pdo::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
           /*  http_response_code(500); */
            echo "erro: " . $e->getMessage() . "\n";
            exit;
            //echo "error when trying to connect to the database: <br><b>$e</b>";
        }
    }

    /**
     * Metodo que execute query
     * pode retornar um array ou bool
     * @param string $query query do banco (SELECT, INSERT, UPDATE, DELETE...)
     * @param array $params array com os parametros da query(necessario que os parametros da query sejam a chave do valor no array)
     * @param bool $return se false, não retorna dados
     * @return array $params array com os parametros da query(necessario que os parametros da query sejam a chave do valor no array)
     */
    public function query(string $query, array $params = [], bool $return = true){
        $stmt = $this->pdo->prepare($query);
        if ($params) {
            $this->prepare($stmt, $params, $query);
        }
        if ($stmt->execute()) {
            return $return ? $stmt->fetchAll(PDO::FETCH_ASSOC) : true;
        } else {
            return false;
        }
    }

    /**
     * Método responsável por encerrar a conexão com o banco de dados
     */
    public function close()/* : void  */{
        unset($this->pdo);
    }

    /**
     * Método que que realiza a passagem dos parametros a query 
     * @param        &$stmt objeto que já recebeu pdo->prepare 
     * @param array  $params array com os parametros da query 
     * @param string $query objeto que já recebeu pdo->prepare 
     */
    private function prepare(&$stmt, array $params, string $query)/* : void */ {
        foreach($params as $key => $param) {
            if (mb_strpos($query, ":$key") !== false) {
                $stmt->bindValue($key, $param);
            } else {
                throw new Exception("parameter key is unknown in query", 500);
            }
        }
    }
}