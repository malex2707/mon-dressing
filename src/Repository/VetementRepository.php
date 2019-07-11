<?php

namespace App\Repository;

use App\Entity\Vetement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vetement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vetement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vetement[]    findAll()
 * @method Vetement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VetementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vetement::class);
    }

    // /**
    //  * @return Vetement[] Returns an array of Vetement objects
    //  */
    public function findSearch(int $typeTo, int $couleur)
    {
        $qb = $this->createQueryBuilder('v');

        return $qb->join('v.couleurs', 'c1')
            ->join('c1.couleurs', 'c2')
            ->andWhere('v.type = :type')
            ->andWhere($qb->expr()->in('c2.id', ':couleur'))
            ->setParameter('type', $typeTo)
            ->setParameter('couleur', $couleur)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Vetement
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
