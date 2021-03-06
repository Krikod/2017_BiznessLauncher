<?php

namespace MBLBundle\Repository;

/**
 * ProfilRechercheRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProfilRechercheRepository extends \Doctrine\ORM\EntityRepository
{
    public function myfindByProfilRecherche($projet_profilId, $locale)
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('p.id')
            ->join('p.metier', 'tp')
            ->addSelect('tp.metier' . $locale . ' as metier')
            ->join('p.dispo', 'sd')
            ->addSelect('sd.dispo' . $locale . ' as dispo')
            ->join('p.invest', 's')
            ->addSelect('s.invest' . $locale . ' as invest')
            ->join('p.ou', 'so')
            ->addSelect('so.ou' . $locale . ' as ou')
            ->join('p.etq', 'se')
            ->addSelect('se.etq' . $locale . ' as etq')

            ->where('p.id = :pid')
            ->setParameter('pid', $projet_profilId)
        ;

        $profilRechercheExist = $qb->getQuery()->getResult();


        foreach ($profilRechercheExist as $key => $pr)
        {
//            Get compétences et création d'un sous tableau'
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.competences', 'r')
                ->select('r.competences' . $locale . ' as competence')
                ->setParameter('id', $pr['id'])
            ;
            $profilRechercheExist[$key]['competence'] = $qb->getQuery()->getResult();

        }

        /*dump($projets); die();*/

        return $profilRechercheExist;
    }

    public function myfindByProjet($projet, $locale)
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('p.id')
            ->join('p.metier', 'tp')
            ->addSelect('tp.metier' . $locale . ' as metier')
            ->join('p.dispo', 'sd')
            ->addSelect('sd.dispo' . $locale . ' as dispo')
            ->join('p.invest', 's')
            ->addSelect('s.invest' . $locale . ' as invest')
            ->join('p.ou', 'so')
            ->addSelect('so.ou' . $locale . ' as ou')
            ->join('p.etq', 'se')
            ->addSelect('se.etq' . $locale . ' as etq')
            ->join('p.projets', 'pp')
//
            ->andWhere('pp = :pid')
            ->setParameter('pid', $projet)
        ;

        $profilRechercheExist = $qb->getQuery()->getResult();


        foreach ($profilRechercheExist as $key => $pr)
        {
//            Get compétences et création d'un sous tableau'
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.competences', 'r')
                ->select('r.competences' . $locale . ' as competence')
                ->setParameter('id', $pr['id'])
            ;
            $profilRechercheExist[$key]['competence'] = $qb->getQuery()->getResult();

        }

        /*dump($projets); die();*/

        return $profilRechercheExist;
    }
}
