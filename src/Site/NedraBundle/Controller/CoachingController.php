<?php

namespace Site\NedraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\NedraBundle\Entity\Coaching;
use Site\NedraBundle\Form\CoachingType;

/**
 * Coaching controller.
 *
 */
class CoachingController extends Controller
{

    /**
     * Lists all Coaching entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Coaching')->findAll();

        return $this->render('SiteNedraBundle:Coaching:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function indexfrontAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Coaching')->findAll();

        return $this->render('SiteNedraBundle:Front:showCoachingFront.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Coaching entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Coaching();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('coaching_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteNedraBundle:Coaching:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Coaching entity.
     *
     * @param Coaching $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Coaching $entity)
    {
        $form = $this->createForm(new CoachingType(), $entity, array(
            'action' => $this->generateUrl('coaching_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Coaching entity.
     *
     */
    public function newAction()
    {
        $entity = new Coaching();
        $form   = $this->createCreateForm($entity);

        return $this->render('SiteNedraBundle:Coaching:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Coaching entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Coaching')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Coaching entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Coaching:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Coaching entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Coaching')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Coaching entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Coaching:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Coaching entity.
    *
    * @param Coaching $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Coaching $entity)
    {
        $form = $this->createForm(new CoachingType(), $entity, array(
            'action' => $this->generateUrl('coaching_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Coaching entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Coaching')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Coaching entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('coaching_edit', array('id' => $id)));
        }

        return $this->render('SiteNedraBundle:Coaching:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Coaching entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteNedraBundle:Coaching')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Coaching entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('coaching'));
    }

    /**
     * Creates a form to delete a Coaching entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coaching_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
