<?php

namespace App\Repository;

use App\Entity\GenrneOfStories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GenrneOfStories>
 *
 * @method GenrneOfStories|null find($id, $lockMode = null, $lockVersion = null)
 * @method GenrneOfStories|null findOneBy(array $criteria, array $orderBy = null)
 * @method GenrneOfStories[]    findAll()
 * @method GenrneOfStories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenrneOfStoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GenrneOfStories::class);
    }

//    /**
//     * @return GenrneOfStories[] Returns an array of GenrneOfStories objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GenrneOfStories
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
