<?php
require_once('config.php');
class MySQLDatabase {
    private $connection;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if(!$this->connection) {
            echo "Error: Unable to connect to MySQL.".
                mysqli_error($this->connection);
        }
    }

    public function fetch_assoc($result_set) {
        return mysqli_fetch_assoc($result_set);
    }

    public function query($sql) {
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result);
        return $result;
    }

    public function num_rows($result_set) {
        return mysqli_num_rows($result_set);
    }

    private function confirm_query($result) {
        if(!$result)
            die("Database query failed: " . mysqli_error($this->connection));
    }
}

$database = new MySQLDatabase();
$db =& $database;
?>
