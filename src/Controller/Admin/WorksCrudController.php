<?php

namespace App\Controller\Admin;

use App\Entity\Works;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class WorksCrudController extends AbstractCrudController
{
    public const WORKS_BASE_PATH = 'upload/images/works';
    public const WORKS_UPLOAD_DIR = 'public/upload/images/works';

    public static function getEntityFqcn(): string
    {
        return Works::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextEditorField::new('description'),
            TextField::new('linkgit'),
            TextField::new('linkwork'),
            AssociationField::new('category'),
            ImageField::new('image')
                ->setBasePath(self::WORKS_BASE_PATH)
                ->setUploadDir(self::WORKS_UPLOAD_DIR)
        ];
    }
}
