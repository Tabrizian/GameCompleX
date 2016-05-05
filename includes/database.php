<?php
class MySQLDatabase {
    private $connection;

    public __construct() {
    }

    public connect() {
        $connection = mysqli_connect();
    }
}
?>
