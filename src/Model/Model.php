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
}