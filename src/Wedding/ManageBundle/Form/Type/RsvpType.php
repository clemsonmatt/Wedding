<?php

namespace Wedding\ManageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RsvpType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('response', 'choice', [
            'label'    => 'Response',
            'choices'  => [
                'yes' => 'Yes, I would not miss it!',
                'no'  => 'I will not be able to attend',
            ],
            'multiple' => false,
            'expanded' => true,
            'required' => true,
        ]);

        $builder->add('name', 'text', [
            'label' => 'Name(s)',
            'attr'  => [
                'placeholder' => 'First & Last',
            ],
            'required' => true,
        ]);

        $builder->add('phone', 'text', [
            'label'    => 'Phone',
            'attr'  => [
                'placeholder' => '123-456-7890',
            ],
            'required' => false,
        ]);

        $builder->add('number', 'integer', [
            'label'    => 'Total Guests',
            'attr'  => [
                'placeholder' => 'Total number attending',
            ],
            'required' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wedding\ManageBundle\Entity\Rsvp',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'rsvp';
    }
}
