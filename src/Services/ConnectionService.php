<?php

namespace App\Services;

use App\Traits\LoggerAwareTrait;
use PDO;
use PDOException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ConnectionService {

    use LoggerAwareTrait;

    private $DB_NAME = "";
    private $DB_USERNAME = "";
    private $DB_PASSWRD = "";
    private $DB_HOST_NAME = "";
    private $DB_PORT = "";
    private $DB_CLASS_NAME = "";
    private $DB_JDBC_URL = "";
    private $connection;
    private $DATABASE_URL = "";

    public function __construct($DB_NAME,$DB_USERNAME,$DB_PASSWRD,$DB_HOST_NAME,$DB_PORT) {
        
            // Set database connection parameters
        

        $this->DB_NAME = $DB_NAME;// ?: "tcevadb";
        $this->DB_USERNAME =$DB_USERNAME;// ?: "khapre.org_db";
        $this->DB_PASSWRD = $DB_PASSWRD;// ?: "vishalkh";
        $this->DB_HOST_NAME = $DB_HOST_NAME;// ?: "localhost";
        $this->DB_PORT = $DB_PORT;// ?: "33

        //$this->DB_CLASS_NAME = $parameters->get('env(RDS_CLASS_NAME)');// ?: "mysqli";
        // $this->DB_NAME = $parameters->get('env(DB_NAME)');// ?: "tcevadb";
        // $this->DB_USERNAME = $parameters->get('env(DB_USERNAME)');// ?: "khapre.org_db";
        // $this->DB_PASSWRD = $parameters->get('env(DB_PASSWRD)');// ?: "vishalkh";
        // $this->DB_HOST_NAME = $parameters->get('env(DB_HOST_NAME)');// ?: "localhost";
        // $this->DB_PORT = $parameters->get('env(DB_PORT)');// ?: "3306";
        // $this->DB_NAME = getenv('DB_NAME');// ?: "tcevadb";
        // $this->DB_USERNAME = getenv('DB_USERNAME');// ?: "khapre.org_db";
        // $this->DB_PASSWRD = getenv('DB_PASSWRD');// ?: "vishalkh";
        // $this->DB_HOST_NAME = getenv('DB_HOST_NAME');// ?: "localhost";
        // $this->DB_PORT = getenv('DB_PORT');// ?: "3306";
        // Create the connection string
        $this->DB_JDBC_URL = "mysql:host=" . $this->DB_HOST_NAME . ";dbname=" . $this->DB_NAME; 
        $this->DATABASE_URL = getenv('DATABASE_URL');
    }

    public function getConnection() : ?PDO {
        try {
            if ($this->connection instanceof PDO) {
                return $this->connection;
            }
            else{
                $this->connection = new PDO($this->DB_JDBC_URL,$this->DB_USERNAME, $this->DB_PASSWRD);//$this->DB_JDBC_URL,$this->DB_USERNAME,$this->DB_PASSWRD);    // Creating PDO instance
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connection;
            }
            return null;
        } catch (PDOException $e) {
            // Handling connection error
            $this->logInfo("Connection failed: " . $e->getMessage());
            return null;
        }
         // Return null if unable to connect after retries
    }

    public function __destruct() {
        $this->connection=null;
    }
}

?>
