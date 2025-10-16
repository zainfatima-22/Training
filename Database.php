<?php
class Database{
    public $connection;
    public function __construct(){
        $dsn = 'mysql:host=localhost;port=3306;dbname=blog;user=root;charset=utf8mb4';
        $this->connection = new PDO($dsn);
    }
    public function queries($query){
        $statement = $this->connection -> prepare($query);
        $statement -> execute();
        return $statement -> fetchALL(PDO::FETCH_ASSOC);
    }

}

$db = new Database();
$results = $db -> queries("SELECT * FROM Post");

foreach ($results as $post){
    echo "<li>" . $post['Title']. "</li>";
}