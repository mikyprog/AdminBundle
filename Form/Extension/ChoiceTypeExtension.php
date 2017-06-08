<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 14:15
 */

namespace Miky\Bundle\AdminBundle\Form\Extension;


use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChoiceTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return ChoiceType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined(array('with_search_field'));
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (isset($options['with_search_field']) && $options["with_search_field"]) {

            $view->vars['with_search_field'] = true;
        }else{
            $view->vars['with_search_field'] = false;
        }
    }

}