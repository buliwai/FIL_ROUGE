<?php

namespace App\Repository;

use App\Entity\ChampionnatMasculinSenior;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ChampionnatMasculinSenior|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChampionnatMasculinSenior|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChampionnatMasculinSenior[]    findAll()
 * @method ChampionnatMasculinSenior[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChampionnatMasculinSeniorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChampionnatMasculinSenior::class);
    }

    // /**
    //  * @return ChampionnatMasculinSenior[] Returns an array of ChampionnatMasculinSenior objects
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
    public function findOneBySomeField($value): ?ChampionnatMasculinSenior
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
