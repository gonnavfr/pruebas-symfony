<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController {
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction($name){
        return new Response('<html><body>Hello '.$name.'! </body></html>');
    }
}
