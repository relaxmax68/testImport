<?php

namespace App\Repository;

use App\Entity\Step;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Step|null find($id, $lockMode = null, $lockVersion = null)
 * @method Step|null findOneBy(array $criteria, array $orderBy = null)
 * @method Step[]    findAll()
 * @method Step[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Step::class);
    }

    // /**
    //  * @return Step[] Returns an array of Step objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    public function findOneBySuite($jeu, $suite): ?Step
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.suite = :suite')
            ->andWhere('s.jeu = :jeu')
            ->setParameter('suite', $suite)
            ->setParameter('jeu', $jeu)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
