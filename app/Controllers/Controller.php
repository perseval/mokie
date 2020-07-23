<?php

namespace App\Controllers;

use League\Plates\Engine;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
 

abstract class Controller
{
    /**
     * @var \League\Plates\Engine
     */
    protected $templates;
    protected $DB;
    protected $request;
    protected $session;

    public function __construct()
    {
        $this->templates = new Engine(\VIEWS);
        $this->templates->loadExtension(new \League\Plates\Extension\Asset(\ASSETS)); 
        $this->request = Request::createFromGlobals(); 
        $this->session = new Session();
        $this->session->start(); 
    }

    protected function view(string $viewname, array $variables = [])
    {
        return  new Response($this->templates->render($viewname, $variables));
    }
}
