<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

   #[Route('/test', name: 'test')]
   public function index(): Response
   {
       return $this->render('test/index.html.twig', [
           'controller_name' => 'TestController',
       ]);
   }

   #[Route('/random/{max}', name: 'random_number')]
   public function number($max)
   {
       $number = random_int(0, $max);

       return $this->render('test/random.html.twig', [
           'randomNumber' => $number
           # here the variable name is randomNumber and the value of it is $number
       ]);
   }

   #[Route('/user/{name}', name: 'app_user')]
   public function displayUser($name = 'Marry'): Response #placeholder Marry, declared
   {
       
       return $this->render('test/user.html.twig', [
        'controller_name' => 'User Controller',
        'name' => $name,
        'name_array' => ['name' => $name, 'job' => "developer"]
       ]);
    }

    #[Route('/test-var', name: 'var')]
   public function testVar()
   {
       $arr = array("name"=>"serri", "age"=>30); // here we create a simple array have keys and values
       return $this->render('test/test_var.html.twig',array("varName"=>$arr)); // this is the way how to send a variable from php (variable you created in the controller) to the twig file
   }
   #[Route('/hello-world', name: 'hello_world_page')]
   public function testAction()
   {
       $text = 'Hello World!';
       return $this->render('test/hello_world.html.twig', array('text'=>$text));
   }
}