<?php
/**
 * Created by PhpStorm.
 * User: alanfoley
 * Date: 29/08/2017
 * Time: 17:21
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}