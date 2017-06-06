<?php

namespace BlogBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $texte;

    /**
     * @var integer
     */
    private $note;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commentaireSignalements;

    /**
     * @var \BlogBundle\Entity\Article
     */
    private $commentairesArticle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaireSignalements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Commentaire
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add commentaireSignalement
     *
     * @param \BlogBundle\Entity\Signalement $commentaireSignalement
     *
     * @return Commentaire
     */
    public function addCommentaireSignalement(\BlogBundle\Entity\Signalement $commentaireSignalement)
    {
        $this->commentaireSignalements[] = $commentaireSignalement;

        return $this;
    }

    /**
     * Remove commentaireSignalement
     *
     * @param \BlogBundle\Entity\Signalement $commentaireSignalement
     */
    public function removeCommentaireSignalement(\BlogBundle\Entity\Signalement $commentaireSignalement)
    {
        $this->commentaireSignalements->removeElement($commentaireSignalement);
    }

    /**
     * Get commentaireSignalements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaireSignalements()
    {
        return $this->commentaireSignalements;
    }

    /**
     * Set commentairesArticle
     *
     * @param \BlogBundle\Entity\Article $commentairesArticle
     *
     * @return Commentaire
     */
    public function setCommentairesArticle(\BlogBundle\Entity\Article $commentairesArticle = null)
    {
        $this->commentairesArticle = $commentairesArticle;

        return $this;
    }

    /**
     * Get commentairesArticle
     *
     * @return \BlogBundle\Entity\Article
     */
    public function getCommentairesArticle()
    {
        return $this->commentairesArticle;
    }
    /**
     * @var \BlogBundle\Entity\User
     */
    private $commentairesUser;


    /**
     * Set commentairesUser
     *
     * @param \BlogBundle\Entity\User $commentairesUser
     *
     * @return Commentaire
     */
    public function setCommentairesUser(\BlogBundle\Entity\User $commentairesUser = null)
    {
        $this->commentairesUser = $commentairesUser;

        return $this;
    }

    /**
     * Get commentairesUser
     *
     * @return \BlogBundle\Entity\User
     */
    public function getCommentairesUser()
    {
        return $this->commentairesUser;
    }

    //////////////////////////////////////
    ////////////////AJOUT/////////////////
    //////////////////////////////////////

    public function __toString()
    {
        return $this->texte;
    }
}
