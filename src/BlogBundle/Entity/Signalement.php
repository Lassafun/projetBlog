<?php

namespace BlogBundle\Entity;

/**
 * Signalement
 */
class Signalement
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $cause;

    /**
     * @var \BlogBundle\Entity\User
     */
    protected $userSignalement;

    /**
     * @var \BlogBundle\Entity\Article
     */
    protected $signalementsArticle;



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
     * Set cause
     *
     * @param string $cause
     *
     * @return Signalement
     */
    public function setCause($cause)
    {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get cause
     *
     * @return string
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Set userSignalement
     *
     * @param \BlogBundle\Entity\User $userSignalement
     *
     * @return Signalement
     */
    public function setUserSignalement(\BlogBundle\Entity\User $userSignalement = null)
    {
        $this->userSignalement = $userSignalement;

        return $this;
    }

    /**
     * Get userSignalement
     *
     * @return \BlogBundle\Entity\User
     */
    public function getUserSignalement()
    {
        return $this->userSignalement;
    }

    /**
     * Set signalementsArticle
     *
     * @param \BlogBundle\Entity\Article $signalementsArticle
     *
     * @return Signalement
     */
    public function setSignalementsArticle(\BlogBundle\Entity\Article $signalementsArticle = null)
    {
        $this->signalementsArticle = $signalementsArticle;

        return $this;
    }

    /**
     * Get signalementsArticle
     *
     * @return \BlogBundle\Entity\Article
     */
    public function getSignalementsArticle()
    {
        return $this->signalementsArticle;
    }

    
    //////////////////////////////////////////
    ////////////// AJOUT ////////////////////
    //////////////////////////////////////////
    
    /**
     * @var \BlogBundle\Entity\Commentaire
     */
    private $signalementsCommentaire;

    /**
     * Set signalementsCommentaire
     *
     * @param \BlogBundle\Entity\Commentaire $signalementsCommentaire
     *
     * @return Signalement
     */
    public function setSignalementsCommentaire(\BlogBundle\Entity\Commentaire $signalementsCommentaire = null)
    {
        $this->signalementsCommentaire = $signalementsCommentaire;

        return $this;
    }

    /**
     * Get signalementsCommentaire
     *
     * @return \BlogBundle\Entity\Commentaire
     */
    public function getSignalementsCommentaire()
    {
        return $this->signalementsCommentaire;
    }


    public function __toString()
    {
        return $this->id.'-'.$this->cause.'-'.$this->signalementsCommentaire;
    }
    

    
}
