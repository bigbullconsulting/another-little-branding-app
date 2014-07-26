<?php

namespace Demo\BrandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($key = 0)
    {

        $branding_data = $this->getDoctrine()
                            ->getRepository('DemoBrandingBundle:Branding')
                            ->findByHostKey($key);

        if (!empty($branding_data)) {
            $branding_data = $branding_data[0];

            if ($branding_data->isActive()) {
                $public_stuff = array(
                    'name' => $branding_data->getName(),
                    'logo' => $branding_data->getUrlLogoImage(),
                    'url' => $branding_data->getUrlHome()
                );
            } else {
                echo $public_stuff = null;
            }

        } else {
            echo $public_stuff = null;
        }

        return new JsonResponse($public_stuff);
    }

    public function missingAction()
    {
        return new Response('You may be missing something, hint hint the host key.');
    }

}



