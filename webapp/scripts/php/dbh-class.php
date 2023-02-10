<?php

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "films_web_service_db";

    protected function connect() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    }
}
