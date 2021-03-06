<?php

namespace App\Controller\Admin;

use App\Entity\ClothesSlider;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class ClothesSliderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClothesSlider::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm(),
            AssociationField::new('clothes')
        ];
    }

}
