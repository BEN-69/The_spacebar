<?php
/**
 * Created by PhpStorm.
 * User: rabii
 * Date: 27/09/2018
 * Time: 18:18
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

        return new Response('My first page already! ');
    }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)

    {
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }
}