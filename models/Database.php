<?php

class Database
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        $host = 'localhost'; // Modify this with your database host
        $username = 'root'; // Modify this with your database username
        $password = ''; // Modify this with your database password
        $database = 'your_database_name'; // Modify this with your database name

        // Create a new MySQLi connection
        $this->connection = new mysqli($host, $username, $password, $database);

        // Check if the connection was successful
        if ($this->connection->connect_errno) {
            die('Database connection error: ' . $this->connection->connect_error);
        }
    }

    public static function getInstance()
    {
        // Create a new instance if it doesn't exist
        if (!self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        // Return the database connection
        return $this->connection;
    }

    public function query($query)
    {
        // Perform a database query
        return $this->connection->query($query);
    }

    public function prepare($query)
    {
        // Prepare a statement for execution
        return $this->connection->prepare($query);
    }

    // Add any additional database helper methods as needed
}
