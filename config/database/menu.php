<?php
/**
 * DATABASE VARIABLES CONFIGURATION
 *
 */

/**
 * DB USERNAME
 */
const DB_USERNAME = 'user';

/**
 * DB HOST
 */
const DB_HOST = 'localhost';

/**
 * DB_NAME
 */
const DB_NAME = 'menu';

/**
 * DB_PASSWORD
 */
const DB_PASSWORD = 'password';

/**
 *
 *Base DIR
 */

const BASE_DIR = __DIR__;

class menu
{
/**
* Database username
* @var string
     */
    var string $username = '';

    /**
     * Database Host
     * @var string
     */
    var string $host = '';

    /**
     * Database Password
     * @var string
     */

    var string $password = '';
    /**
     * Database Name
     * @var string
     */
    var string $dbname = '';

    /**
     * Database Connection variable
     * @var pdo
     */
    var $pdo;

    function __construct()
    {

        $this->username = DB_USERNAME;
        $this->host = DB_HOST;
        $this->password = DB_PASSWORD;
        $this->dbname = DB_NAME;
        $this->createConnection();

    }

    /**
     * Create Connection
     * @return void
     */

    public function createConnection()
    {

        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=UTF8";
        if (!$this->pdo) {
            try {
                $this->pdo = new PDO($dsn, $this->username, $this->password);
            } catch (PDOException $e) {
                echo '<pre>'. $e->getMessage() .'</pre>';
            }


        } else {
            return $this->pdo;

        }
    }

    





//    /**
//     * Fetch Methode
//     * @param int|null $id
//     * @param string|null $tableName
//     * @return array
//     */
//
//    public function fetch( $id = null, string $tableName = null)
//    {
//        $sql = "select * from $tableName ";
//        if ($id != null) {
//            $where = "where entityId=$id";
//            $sql .= $where;
//        }
//        $stmt = $this->pdo->query($sql);
//        return $stmt->fetchAll(PDO::FETCH_OBJ);
//
//    }
//
//    /**
//     * Save Methode
//     * @param $tableName
//     * @param $params
//     * @return void
//     */
//
//    public function save($tableName = null, $params = array())
//    {
//        $tableColumns = implode(",", array_keys($params));
//        $tableValues = implode("','", $params);
//        $sql = "insert into  $tableName ($tableColumns) Values('$tableValues')";
//        $this->pdo->query($sql);
//
//    }
//
//
//    /**
//     * Update Methode
//     * @param int $id
//     * @param string $tableName
//     * @param $params
//     * @return mixed
//     */
//
//
//    public function update(int $id, string $tableName, $params = array())
//    {
//        $args = array();
//        foreach ($params as $key => $value) {
//            $args[] = "$key = '$value'";
//        }
//
//        $sql = "UPDATE $tableName SET " . implode(', ', $args) . " WHERE entityId=$id";
//        $stmt = $this->pdo->query($sql);
//        return $stmt->fetch(PDO::FETCH_ASSOC);
//
//
//    }
//
//    /**
//     * Delete Methode
//     * @param int $id
//     * @param string|null $tableName
//     * @return mixed
//     */
//
//    public function delete(string $id, string $tableName = null)
//    {
//        $sql = "DELETE FROM $tableName WHERE entityId=$id";
//        $stmt = $this->pdo->query($sql);
//        return $stmt->fetch(PDO::FETCH_ASSOC);
//
//    }
//
//    public function setdata($key, $value, $id, $tableName=null)
//    {
//        $sql="update $tableName set $key =  '$value' where entityId=$id";
//        $stmt = $this->pdo->query($sql);
//        return $stmt->fetch(PDO::FETCH_ASSOC);
//
//    }


    function add( $params = [])
    {
        $tableColumns = implode(",", array_keys($params));
        $tableValues = implode("','", $params);
        $sql = "insert into navigation ($tableColumns) Values('$tableValues')";
        $this->pdo->query($sql);
    }

    function delete(int $entityId)
    {
        $sql = "DELETE FROM navigation WHERE entity_id=$entityId";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function status(int $entityId,int $status=null)
    {
        $sql= "UPDATE navigation SET status = 0 WHERE entity_id = $entityId";
        $this->pdo->query($sql);

    }

    function showconfig(int $parentId=null)
    {
        $sql = "select * from navigation where parent_id=$parentId And status=1 ";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function show( int $parentId=null)
    {
        $sql = "select * from navigation ";
        if ($parentId != null) {
            $where = "where parent_id=$parentId ";
            $sql .= $where;
        }
       $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function update(int $entityId,$params)
    {
        $args = array();
        foreach ($params as $key => $value) {
            $args[] = "$key = '$value'";
        }

        $sql = "UPDATE navigation SET " . implode(', ', $args) . " WHERE entity_id=$entityId";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}