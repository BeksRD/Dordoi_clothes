<?php

namespace App\DataFixtures;

use App\Entity\CategoryNews;
use App\Entity\News;
use App\Entity\Product;
use App\Entity\ProductCollection;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->createProduct($manager);
        $this->createCollection($manager);
        // $product = new Product();
        // $manager->persist($product);
    }

    public function createCollection(ObjectManager $manager){
        foreach ($this->collectionData() as [$title,$subtitle,$img] ){
            $collection = new ProductCollection();
            $collection->setTitle($title);
            $collection->setSubtitle($subtitle);
            $collection->setImg($img);
            $manager->persist($collection);
        }
        $manager->flush();
    }


    public function collectionData(){
        return [
          [
              'Vogue Style',
              'For modern women',
              'uploads/images/slide-image-1.jpg'
          ],
            [
                'New Collection',
                'For your beauty and fashion',
                'uploads/images/slide-image-2.jpg'
            ],
            [
                'Feel the luxury',
                'Special collection',
                'uploads/images/slide-image-3.jpg'
            ],
            [
                'With love and passion',
                'New shoe collection',
                'uploads/images/collections-image-1.jpg'
            ],
            [
                'Paris Inspiration',
                'For a good time',
                'uploads/images/collections-image-2.jpg'
            ],
            [
                'Fashion clothes',
                'For summer',
                'uploads/images/collections-image-3.jpg'
            ]
        ];
    }


    public function createProduct(ObjectManager $manager){
        foreach ($this->productData() as [$title,$img,$manufacturer, $price,$description,$collection] ){
            $product = new Product();
            $product->setTitle($title);
            $product->setImg($img);
            $product->setManufacturer($manufacturer);
            $product->setPrice($price);
            $product->setDescription($description);
            $product->setProductCollection($collection);
            $manager->persist($product);
        }
        $manager->flush();
    }
    public function productData(){
        return [
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                1
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                2
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                3
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                4
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                5
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                6
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                1
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                2
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                3
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                4
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                5
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                6
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                1
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                2
            ],[
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                3
            ],
            [
                'Dress for party',
                'uploads/images/grid-item-image-2.jpg',
                'coco chanel',
                1500,
                'This is beautiful dress for party and other else...',
                4
            ]
        ];
    }
}
