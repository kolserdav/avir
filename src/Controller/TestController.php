<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 27.03.2018
 * Time: 1:46
 */

namespace Avir\Controller;

use Avir\Model\ModelOne;


class TestController extends Controller
{
    public function test()
    {
        $model = new ModelOne();
        echo $this->template->render(array('title' => $this, 'title2' => 1));
        return true;
    }
    public function tests()
    {
        
        echo $this->template->render(array('title' => $this, 'title2' => 'here'));
        return 'tests';
    }
}