<?php

namespace Site\NedraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoachingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	           //->add('description', 'textarea', array('attr' => array('class' => 'ckeditor', 'data-theme' => 'medium'),'label' => false, 'required' => false))
            ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))
      ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\NedraBundle\Entity\Coaching'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site_nedrabundle_coaching';
    }
}
