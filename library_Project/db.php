<?php
class db {
    protected $connection;

    function setConnection() {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=library_management", "root", "");
            // echo "Done";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            // die();
        }
    }
}
