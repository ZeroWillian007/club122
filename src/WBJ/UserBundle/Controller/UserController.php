<?php

namespace WBJ\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

use WBJ\UserBundle\Form\UsuariosType;

use WBJ\UserBundle\Entity\Usuarios;


class UserController extends Controller
{
    
    
   
    public $usuario1;
    public $prueba='hola';
    
    public function addAction(){
        
        
       return new Response('hola nigth club xxxxxxxxx.');
        /*
        $usuario=new Usuarios();
        $form=$this->createCreate($usuario);
        
        return $his->render('WBJUserBundle:Usuarios:add.html.twig',array('form'=>$form->createView()));
        */
    }
    
    /*LOGIN DE USUARIOS........................*/
    
    public function loginAction(Request $request){
        
       
        if($request->getMethod()=='POST'){
            
           $usuario=$request->get('user');
           $password=$request->get('pass');
            
            
        }
        
       
        
        $em=$this->getDoctrine()->getEntityManager();
        $repository=$em->getRepository('WBJUserBundle:Usuarios');
        
        
        $user=$repository->findOneBy(array('nickname'=>$usuario,'pass'=>$password));
        $this->usuario1=$user;
        
        
        if($user){
             
             //iniciar sesion--------
             $session = new Session();
            
             $session->set('user1', $user);
                   
             if($user->getControl()=='0'){         
             
             return    $this->render('WBJUserBundle:Usuarios:homeuser.html.twig',array('user' => $user));
             }
             else{
                 
                return    $this->render('WBJUserBundle:Usuarios:admin.html.twig',array('user' => $this->usuario1));
             }
  
        }
        else{
            
          return new Response('falla en login nigth club xxxxxxxxx.');
            
            
        }
        
        
       
    }
    
     public function indexAction(){
        
        
        return    $this->render('WBJUserBundle:Usuarios:index.html.twig');
       
     }
     
       public function nuevoUsuarioAction(){
        
        $usuarios=new Usuarios();
        $form=$this->formarFormulario($usuarios);
        return    $this->render('WBJUserBundle:Usuarios:nuevo.html.twig',array('form'=>$form->createView()));
       
     }
     
     private function formarFormulario(Usuarios $entity){
         
         $form=$this->createForm(new UsuariosType,$entity,array(
             'action'=>$this->generateUrl('wbj_user_createUser'),'method'=>'POST'));
         return $form;     
     }
     public function userHomeAction(){
        
        
        return    $this->render('WBJUserBundle:Usuarios:admin.html.twig');
       
     }
     public function userHomeAdminAction(){
        
        $user1=$this->get('session')->get('user1'); 
        return    $this->render('WBJUserBundle:Usuarios:admin.html.twig',array('user' => $user1));
       
     }
     
     public function edifinfoAction(){
        
       $user1=$this->get('session')->get('user1'); 
       
       return    $this->render('WBJUserBundle:Usuarios:editinfo.html.twig',array('user' => $user1));
       
     }
     
     public function createUserAction(Request $request){
        
       $usuarios=new Usuarios();
       $form=$this->formarFormulario($usuarios);
       $form->handleRequest($request);
       if($form->isValid()){
           
           
           if($usuarios->getImg()){
               
             $fileNameimg = md5(uniqid()).'.'.$usuarios->getImg()->guessExtension();  
               $usuarios->getImg()->move(
                $this->getParameter('brochures_directory'),
                $fileNameimg
            );
            $usuarios->setImg($fileNameimg);
           }
           else{
               
            $usuarios->setImg('admin.jpg');   
           }
            if($usuarios->getImg2()){
               
             $fileNameimg1 =md5(uniqid()).'.'.$usuarios->getImg2()->guessExtension(); 
               $usuarios->getImg2()->move(
                $this->getParameter('brochures_directory'),
                $fileNameimg1
            );
             $usuarios->setImg2($fileNameimg1);
           }
           else{
               
            $usuarios->setImg2('admin.jpg');   
           }
            if($usuarios->getImg3()){
               
              $fileNameimg2 =md5(uniqid()).'.'.$usuarios->getImg3()->guessExtension(); 
              
               
             $usuarios->getImg3()->move(
                $this->getParameter('brochures_directory'),
                $fileNameimg2
            );
              $usuarios->setImg3($fileNameimg2);
           }
           else{
               
            $usuarios->setImg3('admin.jpg');   
           }
            if($usuarios->getImg4()){
               
              $fileNameimg3 =md5(uniqid()).'.'.$usuarios->getImg4()->guessExtension(); 
                $usuarios->getImg4()->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg3
                );
           $usuarios->setImg4($fileNameimg3);
           }
           else{
               
            $usuarios->setImg4('admin.jpg');   
           }
           
           
          
            
           
           
           
           
          
            
           
           
           
           
           
           
         
           
           
           
           $usuarios->setControl(2);
           $usuarios->setExtra('xxx');
           $usuarios->setOpcinal(0);
           
           
           
           
           
           
           
           $em = $this->getDoctrine()->getManager();
           $em->persist($usuarios);
           $em->flush();
          
          //MOVER FOTOS-------------------------------
          
          
          
          
           
           return $this->redirectToRoute('wbj_user_home');
       }
     }
     public function usuariosAction(){

       return    $this->render('WBJUserBundle:Usuarios:usuarios.html.twig');
       
     }
     
     public function actualizarAction(Request $request){

       //recuperar usuario-------------
       $user1=$this->get('session')->get('user1'); 
      
      //buscar usuario----------------- 
      $em = $this->getDoctrine()->getManager();
      $useractualizar = $em->getRepository('WBJUserBundle:Usuarios')->find($user1->getIdUser());
       
        if (!$useractualizar) {
            throw $this->createNotFoundException(
            'No product found for id '.$user1->getIdUser()
            );
        }
       
       
       
       
       if($request->getMethod()=='POST'){
            
           $nombres=$request->get('nombresa');
           $apellidos=$request->get('apellidosa');
           $nick=$request->get('nicknamea'); 
           $pass=$request->get('passa');
           $nacionalidad=$request->get('nacionalidada');
           $provincia=$request->get('provinciaa');
           $ciudad=$request->get('ciudada');
           $intro=$request->get('introduca');
           
           //imagenes
           
           $imagen1=$request->files->get('file-perfil');
           $imagen2=$request->files->get('file-perfil1');
           $imagen3=$request->files->get('file-perfil2');
           $imagen4=$request->files->get('file-perfil3');
           
       }
       
         ///web/uploads/fotos/5d81fd6fbdd374c547e55e520e6fe352.jpeg
         
         if($imagen1){
             
            $fileNameimg1 = md5(uniqid()).'.'.$imagen1->guessExtension(); 
            $imagen1->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg1
            );
            
          
            $useractualizar->setImg($fileNameimg1);
            if($user1->getImg()!='admin.jpg'){
               $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg();
               unlink($ruta);
            }
         }   
          if($imagen2){
             
            $fileNameimg2 = md5(uniqid()).'.'.$imagen2->guessExtension();
            $imagen2->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg2
            );
            
            $useractualizar->setImg2($fileNameimg2);
            if($user1->getImg2()!='admin.jpg'){
               $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg2();
               unlink($ruta);
            }
            
         }   
          if($imagen3){
             
            $fileNameimg3 = md5(uniqid()).'.'.$imagen3->guessExtension(); 
            $imagen3->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg3
            );
            $useractualizar->setImg3($fileNameimg3);
            if($user1->getImg3()!='admin.jpg'){
              $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg3();
              unlink($ruta);
            }  
         }   
          if($imagen4){
             
            $fileNameimg4 = md5(uniqid()).'.'.$imagen4->guessExtension(); 
            $imagen4->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg4
            );
            $useractualizar->setImg4($fileNameimg4);
            if($user1->getImg4()!='admin.jpg'){
              $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg4();
              unlink($ruta);
            }  
         }   
         
         
        
       
         $useractualizar->setNombres($nombres);
         $useractualizar->setApellidos($apellidos);
         $useractualizar->setNickname($nick);
         $useractualizar->setPass($pass);
         $useractualizar->setNacionalidad($nacionalidad);
         $useractualizar->setProvincia($provincia);
         $useractualizar->setCiudad($ciudad);
         $useractualizar->setIntroduc($intro);
         
         
         $em->flush();
         $this->get('session')->set('user1', $useractualizar);
       
         return    $this->render('WBJUserBundle:Usuarios:admin.html.twig',array('user' => $useractualizar));
       
     }
     
     public function editarUserAction(){
         
         return    $this->render('WBJUserBundle:Usuarios:editar_user.html.twig');
     }
     
     public function borrarUserAction(){
         
         return new Response('hola nigth club zona de borrado xxxxxxxxx.');
     }
    
    
     public function buscarUserEditarAction(Request $request){
         
         if($request->getMethod()=='POST'){
            
           $correo=$request->get('correo');
           
            
            
        }
        
       
        
        $em=$this->getDoctrine()->getEntityManager();
        $repository=$em->getRepository('WBJUserBundle:Usuarios');
        $user=$repository->findOneBy(array('email'=>$correo));
         
         $this->get('session')->set('useracualizarbyid', $user); 
         
        return    $this->render('WBJUserBundle:Usuarios:editar_user_presentar.html.twig',array('user' => $user));
        
     }
     //actualizar por actualizar...
     public function actualizarporidAction(Request $request){

       //recuperar usuario-------------
       $user1=$this->get('session')->get('useracualizarbyid'); 
      
      //buscar usuario----------------- 
      $em = $this->getDoctrine()->getManager();
      $useractualizar = $em->getRepository('WBJUserBundle:Usuarios')->find($user1->getIdUser());
       
        if (!$useractualizar) {
            throw $this->createNotFoundException(
            'No product found for id '.$user1->getIdUser()
            );
        }
       
       
       
       
       if($request->getMethod()=='POST'){
            
           $nombres=$request->get('nombresa');
           $apellidos=$request->get('apellidosa');
           $nick=$request->get('nicknamea'); 
           $pass=$request->get('passa');
           $nacionalidad=$request->get('nacionalidada');
           $provincia=$request->get('provinciaa');
           $ciudad=$request->get('ciudada');
           $intro=$request->get('introduca');
           
           //imagenes
           
           $imagen1=$request->files->get('file-perfil');
           $imagen2=$request->files->get('file-perfil1');
           $imagen3=$request->files->get('file-perfil2');
           $imagen4=$request->files->get('file-perfil3');
           
       }
       
         ///web/uploads/fotos/5d81fd6fbdd374c547e55e520e6fe352.jpeg
         
         if($imagen1){
             
            $fileNameimg1 = md5(uniqid()).'.'.$imagen1->guessExtension(); 
            $imagen1->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg1
            );
            
          
            $useractualizar->setImg($fileNameimg1);
            if($user1->getImg()!='admin.jpg'){
               $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg();
               unlink($ruta);
            }
         }   
          if($imagen2){
             
            $fileNameimg2 = md5(uniqid()).'.'.$imagen2->guessExtension();
            $imagen2->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg2
            );
            
            $useractualizar->setImg2($fileNameimg2);
            if($user1->getImg2()!='admin.jpg'){
               $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg2();
               unlink($ruta);
            }
            
         }   
          if($imagen3){
             
            $fileNameimg3 = md5(uniqid()).'.'.$imagen3->guessExtension(); 
            $imagen3->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg3
            );
            $useractualizar->setImg3($fileNameimg3);
            if($user1->getImg3()!='admin.jpg'){
              $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg3();
              unlink($ruta);
            }  
         }   
          if($imagen4){
             
            $fileNameimg4 = md5(uniqid()).'.'.$imagen4->guessExtension(); 
            $imagen4->move(
                  $this->getParameter('brochures_directory'),
                  $fileNameimg4
            );
            $useractualizar->setImg4($fileNameimg4);
            if($user1->getImg4()!='admin.jpg'){
              $ruta=$this->getParameter('brochures_directory')."/".$user1->getImg4();
              unlink($ruta);
            }  
         }   
         
         
        
       
         $useractualizar->setNombres($nombres);
         $useractualizar->setApellidos($apellidos);
         $useractualizar->setNickname($nick);
         $useractualizar->setPass($pass);
         $useractualizar->setNacionalidad($nacionalidad);
         $useractualizar->setProvincia($provincia);
         $useractualizar->setCiudad($ciudad);
         $useractualizar->setIntroduc($intro);
         
         
         $em->flush();
         $usuariodevolver=$this->get('session')->get('user1');
       
         return    $this->render('WBJUserBundle:Usuarios:admin.html.twig',array('user' =>$usuariodevolver));
       
     }
     public function listarAction(Request $request){
         
          $em=$this->getDoctrine()->getEntityManager();
          $repository=$em->getRepository('WBJUserBundle:Usuarios');
        
        
          $users=$repository->findAll();
          $paginator=$this->get('knp_paginator');
          $pagination=$paginator->paginate(
             $users,$request->query->getInt('page',1),
             6
          );
         
          return    $this->render('WBJUserBundle:Usuarios:listar_todos.html.twig',array('pagination'=>$pagination));
     }
     
     
     public function listarrevisarAction($id){
         
          
        $em=$this->getDoctrine()->getEntityManager();
        $repository=$em->getRepository('WBJUserBundle:Usuarios');
        
        
        $user=$repository->findOneBy(array('idUser'=>$id));
         
        return    $this->render('WBJUserBundle:Usuarios:listar_todos_revisar_detalle.html.twig',array('user'=>$user));
     }
     
     
  
     
     
}