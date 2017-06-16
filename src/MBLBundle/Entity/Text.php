<?php

namespace MBLBundle\Entity;

/**
 * Text
 */
class Text
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var msg
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profils = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set text
     *
     * @param \msg $text
     *
     * @return Text
     */
    public function setText(\msg $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return \msg
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Text
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Text
     */
    public function addProfil(\MBLBundle\Entity\Profil $profil)
    {
        $this->profils[] = $profil;

        return $this;
    }

    /**
     * Remove profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     */
    public function removeProfil(\MBLBundle\Entity\Profil $profil)
    {
        $this->profils->removeElement($profil);
    }

    /**
     * Get profils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfils()
    {
        return $this->profils;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chats;


    /**
     * Add chat
     *
     * @param \MBLBundle\Entity\Chat $chat
     *
     * @return Text
     */
    public function addChat(\MBLBundle\Entity\Chat $chat)
    {
        $this->chats[] = $chat;

        return $this;
    }

    /**
     * Remove chat
     *
     * @param \MBLBundle\Entity\Chat $chat
     */
    public function removeChat(\MBLBundle\Entity\Chat $chat)
    {
        $this->chats->removeElement($chat);
    }

    /**
     * Get chats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChats()
    {
        return $this->chats;
    }
}
