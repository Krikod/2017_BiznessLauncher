<?php

namespace MBLBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
/**
 * Profil
 */
class Profil extends BaseUser
{
    protected $id;

    public function setEmail($email)
    {
        $email =is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);
        return $this;
    }

    // Generated code

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $linkedIn;

    /**
     * @var string
     */
    private $localisation;

    /**
     * @var \MBLBundle\Entity\Invest
     */
    private $invest;

    /**
     * @var \MBLBundle\Entity\ETQ
     */
    private $etq;

    /**
     * @var \MBLBundle\Entity\Dispo
     */
    private $dispo;

    /**
     * @var \MBLBundle\Entity\Ou
     */
    private $ou;

    /**
     * @var \MBLBundle\Entity\Metier
     */
    private $metier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $competences;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Profil
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Profil
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Profil
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set linkedIn
     *
     * @param string $linkedIn
     *
     * @return Profil
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linkedIn = $linkedIn;

        return $this;
    }

    /**
     * Get linkedIn
     *
     * @return string
     */
    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return Profil
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set invest
     *
     * @param \MBLBundle\Entity\Invest $invest
     *
     * @return Profil
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
     * Set etq
     *
     * @param \MBLBundle\Entity\ETQ $etq
     *
     * @return Profil
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
     * Set dispo
     *
     * @param \MBLBundle\Entity\Dispo $dispo
     *
     * @return Profil
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
     * Set ou
     *
     * @param \MBLBundle\Entity\Ou $ou
     *
     * @return Profil
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
     * Set metier
     *
     * @param \MBLBundle\Entity\Metier $metier
     *
     * @return Profil
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
     * Add competence
     *
     * @param \MBLBundle\Entity\Competences $competence
     *
     * @return Profil
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projets;


    /**
     * Add projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     *
     * @return Profil
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
     * @var boolean
     */
    private $Reachable;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $texts;


    /**
     * Set reachable
     *
     * @param boolean $reachable
     *
     * @return Profil
     */
    public function setReachable($reachable)
    {
        $this->Reachable = $reachable;

        return $this;
    }

    /**
     * Get reachable
     *
     * @return boolean
     */
    public function getReachable()
    {
        return $this->Reachable;
    }

    /**
     * Add text
     *
     * @param \MBLBundle\Entity\Chat $text
     *
     * @return Profil
     */
    public function addText(\MBLBundle\Entity\Chat $text)
    {
        $this->texts[] = $text;

        return $this;
    }

    /**
     * Remove text
     *
     * @param \MBLBundle\Entity\Chat $text
     */
    public function removeText(\MBLBundle\Entity\Chat $text)
    {
        $this->texts->removeElement($text);
    }

    /**
     * Get texts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTexts()
    {
        return $this->texts;
    }
}
