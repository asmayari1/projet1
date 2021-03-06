<?php

namespace Site\NedraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\NedraBundle\Entity\Programme;
use Site\NedraBundle\Entity\Email;
use Site\NedraBundle\Form\ProgrammeType;

/**
 * Programme controller.
 *
 */
class ProgrammeController extends Controller
{

    /**
     * Lists all Programme entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Programme')->findAll();

        return $this->render('SiteNedraBundle:Programme:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function indexfrontAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteNedraBundle:Programme')->findAll();

        return $this->render('SiteNedraBundle:Front:showProgrammeFront.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Programme entity.
     *
     */
    public function sendemailAction(){
        $em = $this->getDoctrine()->getManager();

        $email = new Email();
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $emai = $request->request->get("email");
            $email->setEmail($emai);
            $em->persist($email);
            $em->flush();
        }

        $entities = $em->getRepository('SiteNedraBundle:Programme')->findAll();

        return $this->render('SiteNedraBundle:Front:showProgrammeFront.html.twig', array(
            'entities' => $entities,
        ));
        }
    public function createAction(Request $request)
    {
        $entity = new Programme();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();
            $entity->upload();
            $em->merge($entity);
            $em->flush();


        $Email = $em->getRepository('SiteNedraBundle:Email')->findAll();

            foreach ($Email as $key => $value) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($entity->getTitre())

                    ->setTo($value->getEmail())
                    ->setFrom("asma.ayari@esprit.tn")
                    ->setBody(
                        $this->renderView(
                            'SiteNedraBundle:Message:emailev.html.twig', array(
                                'email'=>$entity,
                            )
                        )
                    );
                $this->get('mailer')->send($message);
            }

            return $this->redirect($this->generateUrl('programme_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteNedraBundle:Programme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Programme entity.
     *
     * @param Programme $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Programme $entity)
    {
        $form = $this->createForm(new ProgrammeType(), $entity, array(
            'action' => $this->generateUrl('programme_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Programme entity.
     *
     */
    public function newAction()
    {
        $entity = new Programme();
        $form   = $this->createCreateForm($entity);

        return $this->render('SiteNedraBundle:Programme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Programme entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Programme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Programme:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showProgrammeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Programme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Front:programmes.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Programme entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Programme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programme entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteNedraBundle:Programme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Programme entity.
    *
    * @param Programme $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Programme $entity)
    {
        $form = $this->createForm(new ProgrammeType(), $entity, array(
            'action' => $this->generateUrl('programme_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Programme entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteNedraBundle:Programme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $entity->upload();
            $em->merge($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('programme_edit', array('id' => $id)));
        }

        return $this->render('SiteNedraBundle:Programme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Programme entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteNedraBundle:Programme')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Programme entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('programme'));
    }

    /**
     * Creates a form to delete a Programme entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('programme_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function recentProgrammeAction($max = 3)
    {
        $em = $this->getDoctrine()->getManager();
       // $programmes = $em->getRepository('SiteNedraBundle:Programme')->findAll();
        $query7 = $em->createQuery("SELECT u  FROM Site\NedraBundle\Entity\Programme u  ORDER BY u.id DESC");
        $programmes = $query7->getResult();

        return $this->render('SiteNedraBundle:Programme:RecentProgramme.html.twig', array('programmes' => $programmes));
    }
}
