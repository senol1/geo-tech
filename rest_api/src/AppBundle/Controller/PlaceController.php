<?php
/**
 * Created by PhpStorm.
 * User: Qualshore
 * Date: 16/03/2017
 * Time: 11:34
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Place;

class PlaceController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/places")
     */
    public function getPlacesAction(Request $request)
    {
        $places = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Place')
            ->findAll();
        /* @var $places Place[] */


        return $places;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/places/{id}")
     */
    public function getPlaceAction($id,Request $request)
    {
        $place = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Place')
            ->find($request->get('id'));
        /* @var $place Place */

        if(empty($place)){
            return new JsonResponse(['Message'=>"Page non trouvé"], Response::HTTP_NOT_FOUND);
        }

        return $place;
    }

    //créaton d'un nouveau lieu
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/places")
     */
    public function postPlacesAction(Request $request)
    {
        $place = new Place();
        $place->setName($request->get('name'))
            ->setAddress($request->get('address'));

        $em = $this->get('doctrine.orm.entity_manager');
        $em->persist($place);
        $em->flush();

        return $place;
    }
}