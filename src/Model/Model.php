<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 28.03.2018
 * Time: 9:31
 */

namespace Avir\Model;

use Avir\Database\Modules\DB;

abstract class Model
{
    public $db;

    public function getDB()
    {
        if ($this->db == null) {
            return $this->db = new DB();
        }
        else {
            return $this->db;
        }
    }
    public function send(string $query_name)
    {
        $this->db = $this->getDB();
        return $this->db->dbCall($query_name);
    }
    public function sendVal(string $query_name, array $values)
    {
        $this->db = $this->getDB();
        return $this->db->dbCall($query_name, $values);
    }
    public function sendOpt(string $query_name, array $values, string $option)
    {
        $this->db = $this->getDB();
        return $this->db->dbCall($query_name, $values, $option);
    }
    public function sendFetch(string $query_name, array $values, string $option, string $fetch_rule)
    {
        $this->db = $this->getDB();
        return $this->db->dbCall($query_name, $values, $option, $fetch_rule);
    }
    public function checkTable($table_name)
    {
        $this->db = $this->getDB();
        $stmt = $this->db->getStmt("SHOW TABLES LIKE '".$table_name."'");
        return $this->db->stmtCall($stmt,'fetch', \PDO::FETCH_BOTH);
    }
}