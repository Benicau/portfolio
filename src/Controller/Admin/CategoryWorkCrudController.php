<?php

namespace App\Controller\Admin;

use App\Entity\CategoryWork;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryWorkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoryWork::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name')
            
        ];
    }
    
    
}
