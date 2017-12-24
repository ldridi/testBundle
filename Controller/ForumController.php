<?php
/**
 * Created by PhpStorm.
 * User: lotfidev
 * Date: 24/12/17
 * Time: 18:44
 */
namespace App\Forum\Controller;

use Symfony\Component\HttpFoundation\Response;

class ForumController
{
    public function index(){
        return new Response('my new bundle');
    }
}