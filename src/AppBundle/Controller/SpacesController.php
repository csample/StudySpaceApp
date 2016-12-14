<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;

class SpacesController extends Controller
{
  /**
     * @param Request $request
     *
     * @return Response
     */
    public function jsonSpacesAction(Request $request)
    {
      //get repo
      //use find all on repo
      //json respond results
      $em = $this->getDoctrine()->getEntityManager();

      $repo = $em->getRepository('AppBundle:Space');
      // $results = [];

      foreach($repo->findAll() as $space) 
      {
        $results[] = $space->toArray();
      }
      
      return new JsonResponse(array(
          'success' => true,
          'data' => $results
      ));
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function jsonSpaceAction(Request $request)
    {
      //get repo
      //use find all on repo
      //json respond results
      $em = $this->getDoctrine()->getEntityManager();

      $repo = $em->getRepository('AppBundle:Space');
      // $results = [];

      foreach($repo->findAll() as $space) 
      {
        $results[] = $space->toArray();
      }
      
      return new JsonResponse(array(
          'success' => true,
          'data' => $results
      ));
    }
    
}
