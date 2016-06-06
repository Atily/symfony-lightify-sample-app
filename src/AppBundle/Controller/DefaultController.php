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
        $deviceManager = $this->get('role_lightify.api.device.manager');
        $devices = $deviceManager->getList();

        $deviceManager->toggle(1, false, 10);

        $deviceManager->toggle(2, false);

        $deviceManager->toggle(1, false, 10);

        return $this->render(':default:index.html.twig');
    }
}
