<?php
namespace RestoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RestoBundle\Entity\Plat;
class PlatController extends Controller
{
    public function ajoutAction(Request $request)
    {    $plat=new Plat();
    $form=$this->createForm('RestoBundle\Form\PlatType',$plat);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($plat);
        $em->flush($plat);
    }
    return $this->render('@Resto/Default/ajoutPlat.html.twig',array(
        'plat'=>$plat,
        'form'=>$form->CreateView(),
    )) ;   
        }
    }
