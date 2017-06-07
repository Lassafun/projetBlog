<?php

namespace BlogBundle\Entity;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $dateModif;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articleSignalements;

    /**
     * @var \BlogBundle\Entity\User
     */
    private $usersArticle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articleSignalements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateModif
     *
     * @param string $dateModif
     *
     * @return Article
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return string
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Add articleSignalement
     *
     * @param \BlogBundle\Entity\Signalement $articleSignalement
     *
     * @return Article
     */
    public function addArticleSignalement(\BlogBundle\Entity\Signalement $articleSignalement)
    {
        $this->articleSignalements[] = $articleSignalement;

        return $this;
    }

    /**
     * Remove articleSignalement
     *
     * @param \BlogBundle\Entity\Signalement $articleSignalement
     */
    public function removeArticleSignalement(\BlogBundle\Entity\Signalement $articleSignalement)
    {
        $this->articleSignalements->removeElement($articleSignalement);
    }

    /**
     * Get articleSignalements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticleSignalements()
    {
        return $this->articleSignalements;
    }

    /**
     * Set usersArticle
     *
     * @param \BlogBundle\Entity\User $usersArticle
     *
     * @return Article
     */
    public function setUsersArticle(\BlogBundle\Entity\User $usersArticle = null)
    {
        $this->usersArticle = $usersArticle;

        return $this;
    }

    /**
     * Get usersArticle
     *
     * @return \BlogBundle\Entity\User
     */
    public function getUsersArticle()
    {
        return $this->usersArticle;
    }

    /**
     * Add user
     *
     * @param \BlogBundle\Entity\User $user
     *
     * @return Article
     */
    public function addUser(\BlogBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \BlogBundle\Entity\User $user
     */
    public function removeUser(\BlogBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articleCommentaire;


    /**
     * Add articleCommentaire
     *
     * @param \BlogBundle\Entity\Commentaire $articleCommentaire
     *
     * @return Article
     */
    public function addArticleCommentaire(\BlogBundle\Entity\Commentaire $articleCommentaire)
    {
        $this->articleCommentaire[] = $articleCommentaire;

        return $this;
    }

    /**
     * Remove articleCommentaire
     *
     * @param \BlogBundle\Entity\Commentaire $articleCommentaire
     */
    public function removeArticleCommentaire(\BlogBundle\Entity\Commentaire $articleCommentaire)
    {
        $this->articleCommentaire->removeElement($articleCommentaire);
    }

    /**
     * Get articleCommentaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticleCommentaire()
    {
        return $this->articleCommentaire;
    }

    public function __toString()
    {

        return $this->titre;
    }
}
