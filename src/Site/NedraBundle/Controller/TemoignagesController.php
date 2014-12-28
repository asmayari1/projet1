<?php

namespace Site\NedraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\NedraBundle\Entity\Temoignages;
use Site\NedraBundle\Form\TemoignagesType;

/**
 * Temoignages controller.
 *
 */
class TemoignagesController extends Controller
{

    /**
     * Lists all Temoignages entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Temoignages')->findAll();

        return $this->render('SiteNedraBundle:Temoignages:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function indexfrontAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Temoignages')->findAll();

        return $this->render('SiteNedraBundle:Front:showTemoignagesFront.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Temoignages entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Temoignages();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('temoignages_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteNedraBundle:Temoignages:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Temoignages entity.
     *
     * @param Temoignages $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Temoignages $entity)
    {
        $form = $this->createForm(new TemoignagesType(), $entity, array(
            'action' => $this->generateUrl('temoignages_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Temoignages entity.
     *
     */
    public function newAction()
    {
        $entity = new Temoignages();
        $form   = $this->createCreateForm($entity);

        return $this->render('SiteNedraBundle:Temoignages:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Temoignages entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Temoignages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Temoignages entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Temoignages:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Temoignages entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Temoignages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Temoignages entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Temoignages:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Temoignages entity.
    *
    * @param Temoignages $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Temoignages $entity)
    {
        $form = $this->createForm(new TemoignagesType(), $entity, array(
            'action' => $this->generateUrl('temoignages_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Temoignages entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Temoignages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Temoignages entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('temoignages_edit', array('id' => $id)));
        }

        return $this->render('SiteNedraBundle:Temoignages:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Temoignages entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteNedraBundle:Temoignages')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Temoignages entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('temoignages'));
    }

    /**
     * Creates a form to delete a Temoignages entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('temoignages_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
