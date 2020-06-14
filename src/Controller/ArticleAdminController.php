<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/article/admin", name="admin_article_new")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index()
    {
        return $this->render('article_admin/index.html.twig', [

        ]);
    }
}
