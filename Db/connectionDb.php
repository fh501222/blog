<?php

class connectionDb
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'blog';
        $this->charset = 'utf8mb4';

        try {
            $dsn = 'mysql:host=' . $this->servername . ';
                    dbname=' . $this->dbname . ';
                    charset=' . $this->charset;
            $pdo = new pdo($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'connection failed : ' . $e->getMessage();
        }
    }
}

