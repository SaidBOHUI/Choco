<?php

namespace App\Repository;

use App\Entity\TextArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TextArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextArticle[]    findAll()
 * @method TextArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextArticle::class);
    }

    // /**
    //  * @return TextArticle[] Returns an array of TextArticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TextArticle
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
