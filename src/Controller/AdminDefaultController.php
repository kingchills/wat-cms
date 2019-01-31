<?php

namespace Wat\CMF\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class AdminDefaultController
 * @package Wat\CMF\Controller
 * @Route("/admin")
 */
class AdminDefaultController extends AbstractController
{
    /**
     * @Route("/", name="admin_dashboard")
     */
    public function index()
    {
        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'AdminDefaultController',
        ]);
    }
}
