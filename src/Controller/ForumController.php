<?php

namespace Lotfi\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class ForumController
{
    public function index(){
        return new Response('my new bundle');
    }
}
