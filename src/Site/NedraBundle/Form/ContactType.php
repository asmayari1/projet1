<?php

namespace Site\NedraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('attr'=>array('placeholder'=>'Entrer Votre nom')))
            ->add('email','email',array('attr'=>array('placeholder'=>'Entrer Votre adresse Email ')))
            ->add('subject', 'text', array('attr' => array('placeholder'=>'Enter Votre sujet')))
            ->add('message','textarea',array('attr'=>array('placeholder'=>'Enter Votre message')))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\NedraBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site_nedrabundle_contact';
    }
}
