<?php

class Database{
    public $connection;
    function __construct($config,$username="admin",$password="welcome")
    {


        $dns = 'mysql:' .http_build_query($config,'',';');

//        $dns = "mysql:host={$config['host']};port={$config['port']};charset={$config['charset']}";
        $this->connection = new PDO($dns,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
//        echo "okay";
    }

    public function query($query,$params=[]){
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}