<?php

namespace MBLBundle\Repository;

/**
 * ChatRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChatRepository extends \Doctrine\ORM\EntityRepository
{

    public function myfindByProfil($user)
    {
        return $this ->createQueryBuilder('c')
            ->select('c')
            ->join('c.profils', 'pro')
            ->where('pro = :Profil')
            ->setParameter('Profil', $user)
            ->getQuery()
            ->getResult();
    }
    public function myFindChatExist($currentUser, $connectedUser)
    {
        return $this ->createQueryBuilder('c')
            ->select('c')
            ->join('c.profils', 'pro')
            ->join('c.profils', 'proco')

            ->where('pro = :profilone')
            ->andWhere('proco = :profiltwo')
//            ->where($qb->expr()->orX(
//        $qb->expr()->in('pro', $currentUser),
//        $qb->expr()->in('pro', $connectedUser)
            ->setParameters(array(
                'profiltwo' => $connectedUser,
                'profilone'=> $currentUser
            ))

            ->getQuery()
            ->getResult();
    }

}
