<?php

namespace Site\NedraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\NedraBundle\Entity\Introduction;
use Site\NedraBundle\Form\IntroductionType;

/**
 * Introduction controller.
 *
 */
class IntroductionController extends Controller
{

    /**
     * Lists all Introduction entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Introduction')->findAll();

        return $this->render('SiteNedraBundle:Introduction:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function indexFrontAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Introduction')->findAll();

        return $this->render('SiteNedraBundle:Front:showIntroductionFront.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Introduction entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Introduction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('introduction_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteNedraBundle:Introduction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Introduction entity.
     *
     * @param Introduction $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Introduction $entity)
    {
        $form = $this->createForm(new IntroductionType(), $entity, array(
            'action' => $this->generateUrl('introduction_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Introduction entity.
     *
     */
    public function newAction()
    {
        $entity = new Introduction();
        $form   = $this->createCreateForm($entity);

        return $this->render('SiteNedraBundle:Introduction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Introduction entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Introduction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Introduction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Introduction:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Introduction entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Introduction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Introduction entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Introduction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Introduction entity.
    *
    * @param Introduction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Introduction $entity)
    {
        $form = $this->createForm(new IntroductionType(), $entity, array(
            'action' => $this->generateUrl('introduction_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Introduction entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Introduction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Introduction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('introduction_edit', array('id' => $id)));
        }

        return $this->render('SiteNedraBundle:Introduction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Introduction entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteNedraBundle:Introduction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Introduction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('introduction'));
    }

    /**
     * Creates a form to delete a Introduction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('introduction_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
