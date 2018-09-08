<?php
/**
 * Created by PhpStorm.
 * User: amaliszewski
 * Date: 02/06/2018
 * Time: 12:35
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SolutionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render("solution/searchPage.html.twig");
    }

    /**
     * @Route("/addSolution")
     */
    public function addSolution()
    {
        return $this->render('solution/addPage.html.twig');
    }

    /**
     * @Route("/add")
     */
    public function add(Request $request)
    {
        $title = description = $request->request->get('description');
        $description         = $request->request->get('description');
        $type                = $request->request->get('type');



        return $this->render('solution/addPage.html.twig');
    }
}