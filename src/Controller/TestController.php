<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 27.03.2018
 * Time: 1:46
 */

namespace Avir\Controller;

use Avir\Database\Modules\DB;

class TestController extends Controller
{
    public function test()
    {

        echo $this->template->render(array('title' => $this, 'title2' => 'here'));
        return true;
    }
    public function tests()
    {
        
        echo $this->template->render(array('title' => $this, 'title2' => 'here'));
        return 'tests';
    }
}