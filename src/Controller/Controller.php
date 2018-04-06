<?php
/**
 * Created by kolserdav
 * User: Sergey Kol'miller
 * Date: 27.03.2018
 * Time: 9:22
 */

namespace Avir\Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_TemplateWrapper;


class Controller
{
    /**
     * @var Twig_Loader_Filesystem
     */

    protected $loader;
    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @var Twig_TemplateWrapper
     */
    protected $template;

    /**
     * @var integer
     */
    public $id;

    public function __construct()
    {
        /*$this->loader = new Twig_Loader_Filesystem(__DIR__.'/../../resources/template/');
        $this->twig = new Twig_Environment($this->loader, array(
            'cache' => '../var/cache',
            'debug' => true
        ));
        $this->template = $this->twig->load('test.template.twig');*/

    }
}