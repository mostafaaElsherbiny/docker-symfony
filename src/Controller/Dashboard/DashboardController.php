<?php

namespace App\Controller\Dashboard;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard.index')]
    public function index()
    {
        return $this->render('dashboard/index.html.twig');
    }
}
