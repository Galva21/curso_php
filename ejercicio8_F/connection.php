<?php 

class ConnectionMySql{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->server;dbname=sistema_curso_php2", $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Wrong connection " . $e;
        }
    }

    //insert, delete, update
    public function executeQuery($sql){
        $this->connection->exec($sql);
        return $this->connection->lastInsertId();
    }

    //select
    public function consultQuery($sql){
        $query = $this->connection->prepare($sql); //prepare the query for execute
        $query->execute();
        return $query->fetchAll(); //return the registers of the query
    }
}

?>