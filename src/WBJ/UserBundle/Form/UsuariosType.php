<?php

namespace WBJ\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres')
            ->add('apellidos')
            ->add('nickname')
            ->add('pass','password',array('label'=>'Contraseña'))
            
            //->add('fechaCreacion')
            //->add('fechaUpdate')
            
            ->add('medidas')
            ->add('cost','text',array('label'=>'Costo'))
            ->add('signo','choice',array('choices'=>array('0'=>'Aries','1'=>'Tauro','2'=>'Géminis','3'=>'Cáncer','4'=>'Leo'
            ,'5'=>'Virgo','6'=>'Libra','7'=>'Escorpion','8'=>'Sagitario','9'=>'Capricornio','10'=>'Acuario','11'=>'Piscis'),'placeholder'=>'Signo'))
            ->add('fechaNaci','date',array('label'=>'Fecha de Nacimiento'))
            ->add('nacionalidad')
            ->add('provincia')
            ->add('ciudad')
            ->add('privi','choice',array('choices'=>array('0'=>'Usuario','1'=>'Administrador'),'placeholder'=>'Seleccione Privilegios','label'=>'Privilgios'))
            ->add('img','file',array('label'=>'FOTO DE PERFIL','required'=>false))
            ->add('img2','file',array('label'=>'FOTO IMPACTANTE','required'=>false))
            ->add('img3','file',array('label'=>'FOTO SENSUAL','required'=>false))
            ->add('img4','file',array('label'=>'FOTO LIBRE','required'=>false))
            //->add('control')
            //->add('extra')
            //->add('opcinal')
            ->add('email','email')
            
            //PARA las FOTOS
            
            
            ->add('introduc')
            ->add('Guardar','submit',array('label'=>'Guardar'))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WBJ\UserBundle\Entity\Usuarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wbj_userbundle_usuarios';
    }
}
