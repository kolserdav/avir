<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 27.03.2018
 * Time: 1:46
 */

namespace Avir\Controller;

use Avir\Model\ModelOne;
use Avir\Templater\Render;
use Avir\Templater\Config;


class TestController extends Controller
{
    public $params;
    public function test()
    {
        var_dump($this->params);
        //$model = new ModelOne();
        //echo $this->template->render(array('title' => $this, 'title2' => 1));
        return true;
    }
    public function tests()
    {


        $c = new Config();
        $c->setConfig([
            'cache' => 'var/cache',
            'userCache' => 'public/cache'
        ]);
        $r = new Render('resources/template', '/test.template.twig');
        $r->render(
            [
                'test1' => 'aaa',
                'test2' => 'bbb',
                'test3' => 'ccc',
                'for_array' => [1,2,3,4],
                'for_array2' => [4,3,2,1],
                'for_array3' => ['a','f','s']
            ],[
            'field1' => 'ind.twig',
            'field2' => 'app/ind1.twig'
        ]);
        /*echo $this->template->render(array('test2' => 'this', 'test3' => 'here',
            'array3' => [1,2,3,4],
            'array2' => [4,3,2,1],
            'array1' => ['s','s','f'],
            ));*/
        return 'tests';
    }
    public function ajax()
    {
        if ($_REQUEST['hash']){
            echo $_REQUEST['hash'];
        }
        else {
            $c = new Config();
            $c->setConfig([
                'cache' => false,
                'userCache' => false
            ]);
            $r = new Render('resources/template/', '/test.template.twig');
            $r->render(
                [
                    'sdd' => 'asd'
                ], [
                'field1' => 'app/ajax.twig'
            ]);
        }
    }
    public function aj()
    {
        echo $_REQUEST['test'];

        exit();
    }
}