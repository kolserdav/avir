<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 19.03.2018
 * Time: 23:54
 */

namespace Avir\Database\Tests;

use PHPUnit\Framework\TestCase;
use Avir\Database\Modules\Dbpdo;
use PDO;

class Test extends TestCase
{
    protected $root;

    protected function setUp ()
    {
        preg_match('%.*tests%',dirname(__DIR__),$m);
        $this->root = str_replace('tests','',$m[0]);
    }
    public function testDbConnect()
    {
        $this->assertFileExists("$this->root.config");
        $this->assertIsReadable("$this->root.config");
        $this->assertInternalType('object', new Dbpdo());
    }


}