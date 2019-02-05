<?php

namespace App\Controller;

use AppBundle\Controller\BaseController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class IndexController extends BaseController
{
    /**
     * @Route("/api/users/{id_user}/notifications"), name="sendNotifications"
     * @Method("GET")
     */
    public function addUser()
    {
        //data from request:
        $name = random_int(0, 100);
        $surname = random_int(0, 100);
        $phone = random_int(0, 100);
        $channels = random_int(0, 100);

        $response = $this->createApiResponse($programmer, 201);
        $programmerUrl = $this->generateUrl(
            'api_programmers_show',
            ['nickname' => $programmer->getNickname()]
        );
        $response->headers->set('Location', $programmerUrl);
        return $response;
    }

    /**
     * @Route("/api/users/{id_user}/notifications"), name="sendNotifications"
     * @Method("GET")
     */
    public function usersList()
    {
        $user = random_int(0, 100);

        $response = $this->createApiResponse($programmer, 201);
        $programmerUrl = $this->generateUrl(
            'api_programmers_show',
            ['nickname' => $programmer->getNickname()]
        );
        $response->headers->set('Location', $programmerUrl);
        return $response;
    }

    /**
     * @Route("/api/users/{id_user}/notifications"), name="sendNotifications"
     * @Method("GET")
     */
    public function userNotifications()
    {
        $user = random_int(0, 100);

        $response = $this->createApiResponse($programmer, 201);
        $programmerUrl = $this->generateUrl(
            'api_programmers_show',
            ['nickname' => $programmer->getNickname()]
        );
        $response->headers->set('Location', $programmerUrl);
        return $response;
    }

    /**
     * @Route("/api/users/{id_user}/notifications"), name="sendNotifications"
     * @Method("GET")
     */
    public function sendNotifications()
    {
        $user = random_int(0, 100);

        $response = $this->createApiResponse($programmer, 201);
        $programmerUrl = $this->generateUrl(
            'api_programmers_show',
            ['nickname' => $programmer->getNickname()]
        );
        $response->headers->set('Location', $programmerUrl);
        return $response;
    }

}