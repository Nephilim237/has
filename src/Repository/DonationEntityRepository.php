<?php

namespace App\Repository;

use App\Entity\DonationEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DonationEntity>
 *
 * @method DonationEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonationEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonationEntity[]    findAll()
 * @method DonationEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonationEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonationEntity::class);
    }

//    /**
//     * @return DonationEntity[] Returns an array of DonationEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DonationEntity
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
