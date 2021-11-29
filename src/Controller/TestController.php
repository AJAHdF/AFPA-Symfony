<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


// 
class TestController extends AbstractController
{
    // grace au package annotation les routes sont definies comme ici
    // @Route est une annotation td2 "/test" td3 "/test/name"
    /** 
        * @Route("/test/name" name='name')
    */
    public function name(): Response
    {
        return $this->render('test/name.html.twig', [
                                'className' => get_called_class(),
                                'actionName' =>'name'
                            ]);
        // return new Response(
        // '<h1>  Coucou c moi le lapin de Lorgies <br>
        // TestController index </h1>' 
        // );
    }
};