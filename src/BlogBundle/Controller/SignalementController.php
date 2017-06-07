<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Signalement;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Commentaire;
use BlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Signalement controller.
 *
 */
class SignalementController extends Controller
{
    /**
     * Lists all signalement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

       /* $signalements = $em->getRepository('BlogBundle:Signalement')->findAll();*/

       /* Liste des articles signalés*/
        $signalementsArticle = $em->getRepository('BlogBundle:Signalement')->getListArticles();
       /* Liste des commentaires signalés*/
        $signalementsCommentaire = $em->getRepository('BlogBundle:Signalement')->getListCommentaires();
        /* Liste des users signalés*/
        $userSignalement = $em->getRepository('BlogBundle:Signalement')->getListUser();

        return $this->render('signalement/index.html.twig', array(
            'signalementsArticle' => $signalementsArticle,
            'signalementsCommentaire' => $signalementsCommentaire,
            'userSignalement' => $userSignalement,
        ));
    }

    /**
     * Creates a new signalement entity.
     *
     */
    public function newAction(Request $request)
    {
        $signalement = new Signalement();
        $form = $this->createForm('BlogBundle\Form\SignalementType', $signalement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($signalement);
            $em->flush();

            return $this->redirectToRoute('signalement_show', array('id' => $signalement->getId()));
        }

        return $this->render('signalement/new.html.twig', array(
            'signalement' => $signalement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a signalement entity.
     *
     */
    public function showAction(Signalement $signalement)
    {
        $deleteForm = $this->createDeleteForm($signalement);

        return $this->render('signalement/show.html.twig', array(
            'signalement' => $signalement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing signalement entity.
     *
     */
    public function editAction(Request $request, Signalement $signalement)
    {
        $deleteForm = $this->createDeleteForm($signalement);
        $editForm = $this->createForm('BlogBundle\Form\SignalementType', $signalement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('signalement_edit', array('id' => $signalement->getId()));
        }

        return $this->render('signalement/edit.html.twig', array(
            'signalement' => $signalement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a signalement entity.
     *
     */
    public function deleteAction(Signalement $signalement)
    {
        
            $em = $this->getDoctrine()->getManager();
            $em->remove($signalement);
            $em->flush();
        

        return $this->redirectToRoute('signalement_index');
    }

    /**
     * Creates a form to delete a signalement entity.
     *
     * @param Signalement $signalement The signalement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Signalement $signalement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('signalement_delete', array('id' => $signalement->getId())))
            ->setMethod('POST')
            ->getForm()
        ;
    }

    ////////////////////////////////////
    ////////////AJOUT//////////////////
    ///////////////////////////////////

  //FONCTION QUI PERMET LA SUPPRESSION DE LARTICLE DIRECT DES SIGNALEMENT
    public function deleteArticleAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('signalement_index');
    }

    //FONCTION QUI PERMET LA SUPPRESSION DU COMMENTAIRE DIRECT DES SIGNALEMENT
     public function deleteCommentaireAction(Commentaire $commentaire)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();

        return $this->redirectToRoute('signalement_index');
    }

    //FONCTION QUI PERMET LA SUPPRESSION DE LUTILISATEUR DIRECT DES SIGNALEMENT
     public function deleteUserAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('signalement_index');
    }
}
