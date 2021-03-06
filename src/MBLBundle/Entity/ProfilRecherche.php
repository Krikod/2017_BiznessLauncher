<?php

namespace MBLBundle\Entity;

/**
 * ProfilRecherche
 */
class ProfilRecherche
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MBLBundle\Entity\ETQ
     */
    private $etq;

    /**
     * @var \MBLBundle\Entity\Ou
     */
    private $ou;

    /**
     * @var \MBLBundle\Entity\Invest
     */
    private $invest;

    /**
     * @var \MBLBundle\Entity\Dispo
     */
    private $dispo;

    /**
     * @var \MBLBundle\Entity\Metier
     */
    private $metier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projets;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $competences;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->competences = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etq
     *
     * @param \MBLBundle\Entity\ETQ $etq
     *
     * @return ProfilRecherche
     */
    public function setEtq(\MBLBundle\Entity\ETQ $etq = null)
    {
        $this->etq = $etq;

        return $this;
    }

    /**
     * Get etq
     *
     * @return \MBLBundle\Entity\ETQ
     */
    public function getEtq()
    {
        return $this->etq;
    }

    /**
     * Set ou
     *
     * @param \MBLBundle\Entity\Ou $ou
     *
     * @return ProfilRecherche
     */
    public function setOu(\MBLBundle\Entity\Ou $ou = null)
    {
        $this->ou = $ou;

        return $this;
    }

    /**
     * Get ou
     *
     * @return \MBLBundle\Entity\Ou
     */
    public function getOu()
    {
        return $this->ou;
    }

    /**
     * Set invest
     *
     * @param \MBLBundle\Entity\Invest $invest
     *
     * @return ProfilRecherche
     */
    public function setInvest(\MBLBundle\Entity\Invest $invest = null)
    {
        $this->invest = $invest;

        return $this;
    }

    /**
     * Get invest
     *
     * @return \MBLBundle\Entity\Invest
     */
    public function getInvest()
    {
        return $this->invest;
    }

    /**
     * Set dispo
     *
     * @param \MBLBundle\Entity\Dispo $dispo
     *
     * @return ProfilRecherche
     */
    public function setDispo(\MBLBundle\Entity\Dispo $dispo = null)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return \MBLBundle\Entity\Dispo
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set metier
     *
     * @param \MBLBundle\Entity\Metier $metier
     *
     * @return ProfilRecherche
     */
    public function setMetier(\MBLBundle\Entity\Metier $metier = null)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return \MBLBundle\Entity\Metier
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Add projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     *
     * @return ProfilRecherche
     */
    public function addProjet(\MBLBundle\Entity\Projet $projet)
    {
        $this->projets[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     */
    public function removeProjet(\MBLBundle\Entity\Projet $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * Add competence
     *
     * @param \MBLBundle\Entity\Competences $competence
     *
     * @return ProfilRecherche
     */
    public function addCompetence(\MBLBundle\Entity\Competences $competence)
    {
        $this->competences[] = $competence;

        return $this;
    }

    /**
     * Remove competence
     *
     * @param \MBLBundle\Entity\Competences $competence
     */
    public function removeCompetence(\MBLBundle\Entity\Competences $competence)
    {
        $this->competences->removeElement($competence);
    }

    /**
     * Get competences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetences()
    {
        return $this->competences;
    }
}
