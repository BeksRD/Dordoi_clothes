<?php

namespace App\Controller\Admin;

use App\Entity\Clothes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClothesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clothes::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm(),
            TextField::new('title'),
            ImageField::new('img')
            ->setUploadDir('public/uploads/images')
            ->setBasePath('uploads/images'),
            TextEditorField::new('content'),
            BooleanField::new('published'),
        ];
    }

}
