<?php
declare(strict_types=1);
namespace App\Repository;

use App\Entity\BlogEntity;
use Ramsey\Uuid\Uuid;

/**
 * @method Blog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blog[]    findAll()
 * @method Blog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogRepository implements Blog
{
    private $blog = [];

    public function __construct()
    {
        $uuid = '69e7a80b-925d-4670-a264-912a67523f5a';

        $this->blog[$uuid] = new BlogEntity( $uuid,'date','titre', 'donovan','text');


    }

    public function find(string $id): BlogEntity
    {
        if (!isset($this->blog[$id])) {
            throw new \LogicException('Id does not exist');
        }

        return $this->blog[$id];
    }

    public function create(string $title): BlogEntity
    {
        return new BlogEntity((Uuid::uuid4())->toString(), $title,'titre du blog','donovan','voici le texte');
    }


//    /**
//     * @return Blog[] Returns an array of Blog objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Blog
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
