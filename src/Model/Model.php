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
    protected function send(string $query_name)
    {
        $db = new DB();
        return $db->dbCall($query_name);
    }
    protected function sendVal(string $query_name, array $values)
    {
        $db = new DB();
        return $db->dbCall($query_name, $values);
    }
    protected function sendOpt(string $query_name, array $values, string $option)
    {
        $db = new DB();
        return $db->dbCall($query_name, $values, $option);
    }
}