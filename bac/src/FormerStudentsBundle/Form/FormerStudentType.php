<?php

namespace FormerStudentsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormerStudentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('mail', 'email')
            ->add('civility', 'choice', array(
                'choices' => array('m' => 'masculin', 'f' => 'Féminin')))
            ->add('studySector', 'text')
            ->add('graduationYear', 'number')

            ->add('universities', 'collection', array(
                'type'          => new UniversityType(),
                'allow_add'     => true,
                'allow_delete'  =>true
            ))
            ->add('S\'inscrire', 'submit');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormerStudentsBundle\Entity\FormerStudent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'formerstudentsbundle_formerstudent';
    }
}
