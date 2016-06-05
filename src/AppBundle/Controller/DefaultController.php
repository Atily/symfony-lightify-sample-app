<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $client = $this->get('role_lightify.api.client');
        $devices = $client->listDevices();

        $client->fadeOut($devices[1], 30, 0.5);
        $client->switchOff($devices[0]);
        $client->switchOff($devices[1]);
        $client->switchOff($devices[2]);

        return $this->render(':default:index.html.twig');
    }
}
