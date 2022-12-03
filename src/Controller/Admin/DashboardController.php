<?php

namespace App\Controller\Admin;

use App\Entity\Works;
use App\Entity\CategoryWork;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{

    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
        
    }
    #[Route('/admin', name: 'admin')]
    #[Security("is_granted('ROLE_ADMIN')")]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator->setController(WorksCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
       

        yield MenuItem::subMenu('Works', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Create Work','fas fa-plus', Works::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Works','fas fa-eye', Works::class)
        ]);

       
        yield MenuItem::subMenu('Categorie', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Create Categorie','fas fa-plus', CategoryWork::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Show Categories','fas fa-eye', CategoryWork::class)
        ]);
    }
}
