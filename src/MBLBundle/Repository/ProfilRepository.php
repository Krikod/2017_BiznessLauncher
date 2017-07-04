<?php

namespace MBLBundle\Repository;

/**
 * ProfilRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProfilRepository extends \Doctrine\ORM\EntityRepository
{
    public function findLastProfils4()
    {
        return $this ->createQueryBuilder('profil')
            ->select('profil')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
            ;// TODO: Change the autogenerated stub
    }
    public function myfindByMetLoc($idMetier, $idLoc)
    {
        return $this ->createQueryBuilder('p')
            ->select('p')
            ->join('p.metier', 'pmet')
            ->where('pmet.metier = :met')
            ->setParameter('met', $idMetier)
            ->andWhere('p.localisation = :secteurId')
            ->setParameter('secteurId', $idLoc)
            ->getQuery()
            ->getResult();// TODO: Change the autogenerated stub
    }
    public function myfindByMet($idMetier)
    {
        return $this ->createQueryBuilder('p')
            ->select('p')
            ->join('p.metier', 'pmet')
            ->where('pmet.id = :met')
            ->setParameter('met', $idMetier)
            ->getQuery()
            ->getResult();// TODO: Change the autogenerated stub
    }
}
