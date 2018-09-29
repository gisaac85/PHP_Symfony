<?php
/**
 * Created by PhpStorm.
 * User: Isaac
 * Date: 9/29/2018
 * Time: 2:19 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
public function homepage(){
    return new Response("OMG! This is my first Symfony page");
}
/**
 * @Route("/show/{slug}")
 */
public function show($slug){
return new Response(sprintf('This is a Route: %s',$slug));
}

}