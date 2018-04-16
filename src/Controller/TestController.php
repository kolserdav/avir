<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 27.03.2018
 * Time: 1:46
 */

namespace Avir\Controller;

use Avir\Model\ModelOne;
use Avir\Templater\Module\Render;
use Avir\Templater\Module\Config;


class TestController extends Controller
{
    public $params;
    public function test()
    {
        $c = new Config();
        $c->setConfig([
            'cache' => 'var/cache',
            'userCache' => 'public/cache',
            'cookieName' => 'tew'
        ]);
        $r = new Render('resources/template', 'test.template.twig');
        $sss = "<hr>ffffff<hr>";
        $man = 'http://'.$_SERVER['SERVER_NAME']."/.manifest.appcache";
        $r->render(
            [
                'manifest'=>$man,
                'test1' => 'aaa',
                'test2' => 'bbb',
                'test3' => 'ccc',
                'for_array' => [1,2,3,$sss],
                'for_array2' => ['f','E'],
                'for_array3' => ['a','f','s']
            ],[
            'manif' => 'app/manifest.twig',
            'field1' => 'ind.twig',
            'field2' => 'app/ind1.twig',
            'title' => 'title.twig'
        ]);
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
                'cache' => 'var/cache',
                'userCache' => 'public/cache'
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
        $cookie = json_decode($_REQUEST['cookie']);
        var_dump($cookie->name->time.$cookie->name->nameCookie->clear);

        exit();
    }
}