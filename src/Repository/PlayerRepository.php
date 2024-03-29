<?php

namespace App\Repository;

use App\Entity\Player;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Player|null find($id, $lockMode = null, $lockVersion = null)
 * @method Player|null findOneBy(array $criteria, array $orderBy = null)
 * @method Player[]    findAll()
 * @method Player[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Player::class);
    }

    /**
     * return Player[]
     */

    public function findAll(): Array 
    {   
        return $this->createQueryBuilder('p')
            ->where('p.available = true')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return Player[] Returns an array of Player objects
     */
    public function findSorted()
    {
        return $this->createQueryBuilder('p')
            ->where('p.available = true')
            ->orderBy('p.score', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
}
