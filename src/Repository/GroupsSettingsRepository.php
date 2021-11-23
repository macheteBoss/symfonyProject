<?php

namespace App\Repository;

use App\Entity\GroupsSettings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupsSettings|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupsSettings|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupsSettings[]    findAll()
 * @method GroupsSettings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupsSettingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupsSettings::class);
    }

    // /**
    //  * @return GroupsSettings[] Returns an array of GroupsSettings objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupsSettings
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
