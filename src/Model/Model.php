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
    public function send(string $query_name)
    {
        $db = new DB();
        return $db->dbCall($query_name);
    }
    public function sendVal(string $query_name, array $values)
    {
        $db = new DB();
        return $db->dbCall($query_name, $values);
    }
    public function sendOpt(string $query_name, array $values, string $option)
    {
        $db = new DB();
        return $db->dbCall($query_name, $values, $option);
    }
    public function sendFetch(string $query_name, array $values, string $option, string $fetch_rule)
    {
        $db = new DB();
        return $db->dbCall($query_name, $values, $option, $fetch_rule);
    }
}