<?php

namespace App\Repository;

use App\Entity\ClothesSlider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClothesSlider|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClothesSlider|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClothesSlider[]    findAll()
 * @method ClothesSlider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClothesSliderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClothesSlider::class);
    }

    // /**
    //  * @return ClothesSlider[] Returns an array of ClothesSlider objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClothesSlider
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
