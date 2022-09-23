<?php



namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of VoyagesControlleur
 *
 * @author siab01
 */
class VoyagesControlleur  extends AbstractController{
    /**
     * @Route ( "/voyages" , name="voyages")
     * @return Response
     */
    public function index () :Response  {
         return $this ->render ("pages/voyages.html.twig");
    }
    //put your code here
}
