<?php

namespace Site\NedraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProgrammeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
        ->add('file')
            ->add('date')
            ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\NedraBundle\Entity\Programme'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site_nedrabundle_programme';
    }
}
