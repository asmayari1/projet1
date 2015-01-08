<?php

namespace Site\NedraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
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

            ->add('date','date', array(
                    'input'  => 'datetime',
                    'widget' => 'single_text',
                    'data' => new \DateTime("now"),
                    'attr' => array('class' => 'form-control input')))
            ->add('auteur')
            ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\NedraBundle\Entity\News'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'site_nedrabundle_news';
    }
}
