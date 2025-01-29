<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Okres;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Main extends BaseController
{
    var $okres;
    var $data;
   
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {

        parent::initController($request, $response, $logger);
        $this->okres = new Okres();
       $this->data["okresy"] = $this->okres->where("kraj", 141)->findAll();
        
      
    }
        
    
    
        public function index()
        {

                echo view ("index.php", $this->data);
        }

}