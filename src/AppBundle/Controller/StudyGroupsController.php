<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use AppBundle\Entity\StudyGroup;

class StudyGroupsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function jsonStudyGroupsAction(Request $request)
    {
      //get repo
      //use find all on repo
      //json respond results
      $em = $this->getDoctrine()->getEntityManager();

      $repo = $em->getRepository('AppBundle:StudyGroup');
      $searchTitle = $request->query->get('title');
      $products = [];
      $results = [];

      // $results = [];

      if ($searchTitle) {
        $products = $repo->findBy([
          'title' => $searchTitle
        ]);
      } else {
        $products = $repo->findAll();
      }

      foreach($products as $space) 
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
    public function jsonStudyGroupCreateAction(Request $request)
    {
      $study_group = new StudyGroup();
      $study_group->setTitle($request->request->get('title'));
      $study_group->setGoogleApiKey($request->request->get('google_api_key'));
      $study_group->setIndoor($request->request->get('indoor'));
      $study_group->setOutdoor($request->request->get('outdoor'));
      $study_group->setLimitCap($request->request->get('limit_cap'));
      $study_group->setCourseId($request->request->get('course_id'));
      $study_group->setLat($request->request->get('lat'));
      $study_group->setLng($request->request->get('lng'));
      $study_group->setDateCreated(date_create());

      $em = $this->getDoctrine()->getManager();

      // tells Doctrine you want to (eventually) save the Product (no queries yet)
      $em->persist($study_group);

      // actually executes the queries (i.e. the INSERT query)
      $em->flush();
      //get repo 
      //use find all on repo
      //json respond results
      // $em = $this->getDoctrine()->getEntityManager();

      // $repo = $em->getRepository('AppBundle:StudyGroup');
      
      
      // return new JsonResponse(array(
      //     'success' => true,
      //     'data' => $results
      // ));[]
      return new JsonResponse([
        'success' => true,
        'data' => [
          'id' => $study_group->getId(),
          'title' => $study_group->getTitle(),
          'date_created' => $study_group->getDateCreated(),
          'google_api_key' => $study_group->getGoogleApiKey(),
          'indoor' => $study_group->getIndoor(),
          'outdoor' => $study_group->getOutdoor(),
          'limit_cap' => $study_group->getLimitCap(),
          'course_id' => $study_group->getCourseId(),
          'lat' => $study_group->getLat(),
          'lng' => $study_group->getLng()
        ]
      ]);
    }


}