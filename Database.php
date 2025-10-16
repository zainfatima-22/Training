<?php
class Database{
    public $connection;
    public function __construct($config, $username = 'root', $password = ''){
        //$dsn = 'mysql:host=localhost;port=3306;dbname=blog;user=root;charset=utf8mb4';
       //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
       $dsn = 'mysql: '. http_build_query($config, '', ';');
       $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function queries($query, $params = []){
        $statement = $this->connection -> prepare($query);
        $statement -> execute($params);
        return $statement;
    }

}

$config = require "config.php";
$db = new Database($config['database']);
/*
foreach ($results as $post){
    echo "<li>" . $post['Title']. "</li>";
}
*/