<?php
require_once('config.php');
class MySQLDatabase {
    private $connection;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if(!$connection) {
            echo "Error: Unable to connect to MySQL.".
                mysqli_error($this->connection);
        }
    }

    public function fetch_assoc($result_set) {
        return mysqli_fetch_assoc($result_set);
    }

    public function query($sql) {
        return mysqli_query($connection, $sql);
    }
}

$database = new MySQLDatabase();
$db =& $database;
?>
